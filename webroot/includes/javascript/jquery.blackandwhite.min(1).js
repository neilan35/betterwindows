/**
 *
 * Version: 0.2.6
 * Author:  Gianluca Guarini
 * Contact: gianluca.guarini@gmail.com
 * Website: http://www.gianlucaguarini.com/
 * Twitter: @gianlucaguarini
 *
 * Copyright (c) 2013 Gianluca Guarini
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 **/
;
(function($) {
	$.fn.extend({
		BlackAndWhite: function(options) {
			'use strict';
			var $container = this,
				defaults = {
				hoverEffect: true,
				webworkerPath: false,
				responsive: true,
				invertHoverEffect: false,
				speed: 500,
				onImageReady: null
			};
			options = $.extend(defaults, options);
			
			/**
			 *
			 * Public vars
			 *
			 */
			var hoverEffect = options.hoverEffect,
					webworkerPath = options.webworkerPath,
					invertHoverEffect = options.invertHoverEffect,
					responsive = options.responsive,
					fadeSpeedIn = $.isPlainObject(options.speed) ? options.speed.fadeIn : options.speed,
					fadeSpeedOut = $.isPlainObject(options.speed) ? options.speed.fadeOut : options.speed;

			var isIE7 = (document.all && !window.opera && window.XMLHttpRequest) ? true : false;
			
			/*
			 *
			 * features detection
			 *
			 */

			var browserPrefixes = ' -webkit- -moz- -o- -ms- '.split(' ');
			
			var cssPrefixString = {};
			var cssPrefix = function(property) {
				if (cssPrefixString[property] || cssPrefixString[property] === '')
					return cssPrefixString[property] + property;
				var e = document.createElement('div');
				var prefixes = ['', 'Moz', 'Webkit', 'O', 'ms', 'Khtml']; // Various supports...
				for (var i in prefixes) {
					if (typeof e.style[prefixes[i] + property] !== 'undefined') {
						cssPrefixString[property] = prefixes[i];
						return prefixes[i] + property;
					}
				}
				return property.toLowerCase();
			};
			

			// https://github.com/Modernizr/Modernizr/blob/master/feature-detects/css-filters.js
			var cssfilters = function() {
				var el = document.createElement('div');
				el.style.cssText = browserPrefixes.join('filter' + ':blur(2px); ');
				return !!el.style.length && ((document.documentMode === undefined || document.documentMode > 9));
			}();
			/**
			 *
			 * Private vars
			 *
			 */
			var supportsCanvas = !!document.createElement('canvas').getContext,
					$window = $(window),
					/* Check if Web Workers are supported */
					supportWebworker = (function() {
						return (typeof (Worker) !== "undefined") ? true : false;
					}()),
					cssFilter = cssPrefix('Filter'),
					imagesArray = [],
					BnWWorker = supportWebworker && webworkerPath ? new Worker(webworkerPath + "BnWWorker.js") : false;
			/**
			 *
			 * Private methods
			 *
			 */
			var _onMouseLeave = function(e) {
				$(e.currentTarget).find('.BWfade').stop(true, true)[!invertHoverEffect ? 'fadeIn' : 'fadeOut'](fadeSpeedIn);
			};

			var _onMouseEnter = function(e) {
				$(e.currentTarget).find('.BWfade').stop(true, true)[invertHoverEffect ? 'fadeIn' : 'fadeOut'](fadeSpeedIn);
			};
			
			
			var _onImageReady = function(img) {
				if (typeof options.onImageReady === 'function')
					options.onImageReady(img);
			};
			// Loop all the images converting them by the webworker (this process is unobstrusive and it does not block the page loading)
			var _webWorkerLoop = function() {
				if (!imagesArray.length)
					return;

				BnWWorker.postMessage(imagesArray[0].imageData);

				BnWWorker.onmessage = function(event) {
					imagesArray[0].ctx.putImageData(event.data, 0, 0);
					_onImageReady(imagesArray[0].img);
					imagesArray.splice(0, 1);
					_webWorkerLoop();
				};
			};
			//convert any image into B&W using HTML5 canvas
			var _manipulateImage = function(img, canvas, width, height) {
				var ctx = canvas.getContext('2d'),
						currImg = img,
						i = 0,
						grey;

				ctx.drawImage(img, 0, 0, width, height);

				var imageData = ctx.getImageData(0, 0, width, height),
						px = imageData.data,
						length = px.length;

				// web worker superfast implementation
				if (BnWWorker) {

					imagesArray.push({
						imageData: imageData,
						ctx: ctx,
						img: img
					});

				} else {

					// no webworker slow implementation
					for (; i < length; i += 4) {
						grey = px[i] * 0.3 + px[i + 1] * 0.59 + px[i + 2] * 0.11;
						px[i] = px[i + 1] = px[i + 2] = grey;
					}

					ctx.putImageData(imageData, 0, 0);

					_onImageReady(img);
				}
			};
			
			var _injectTags = function($img, $imageWrapper) {

				var pic = $img[0],
					src = pic.src,
					width = $($img).width(),
					height = $($img).height();

				if (supportsCanvas && !cssfilters) {
					
					var css = {
						'position': 'absolute',
						'z-index' : 2,
						top: 0,
						left: 0,
						display: invertHoverEffect ? 'none' : 'block',
						width: width,
						height: height
					};
					
					var realWidth = pic.width,
						realHeight = pic.height;

					//adding the canvas
					$('<canvas class="BWfade" width="' + realWidth + '" height="' + realHeight + '"></canvas>').prependTo($imageWrapper);
					//getting the canvas
					var $canvas = $imageWrapper.find('canvas');
					
					//setting the canvas position on the Pics
					$canvas.css(css);

					_manipulateImage(pic, $canvas[0], realWidth, realHeight);
					
				} else {
					
					var cs = {
						'position': 'absolute',
						'z-index' : 2,
						top: 0,
						left: 0,
						display: invertHoverEffect ? "none" : "block"
					};
					
					cs[cssPrefix('Filter')] = 'grayscale(100%)';
					
					//adding the canvas
					$('<img src=' + src + ' width="' + width + '" height="' + height + '" class="BWFilter BWfade" /> ').prependTo($imageWrapper);
					$('.BWFilter').css($.extend(cs, {
						'filter': 'progid:DXImageTransform.Microsoft.BasicImage(grayscale=1)'
					}));
					
					_onImageReady(pic);
					
				}
				
				window.setTimeout(function () {
					$img.addClass('fadein');
				}, 10);
				
			};

			var _injectTagsFlickr = function($img, $imageWrapper) {
				
				if (!cssfilters) {

					var pic = $img[0],
						src = pic.src,
						width = $($img).width(),
						height = $($img).height(),
						mozCss = {
							'position': 'absolute',
							'z-index' : 2,
							top: 0,
							left: 0,
							display: invertHoverEffect ? 'none' : 'block',
							width: width,
							height: height
						};
						
						mozCss['filter'] = 'url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\' filterRes=\'400\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale")';	

						//adding the canvas
						$('<img src=' + src + ' width="' + width + '" height="' + height + '" class="BWFilter BWfade" /> ').prependTo($imageWrapper);
						$('.BWFilter').css(mozCss);

						_onImageReady(pic);
						
						window.setTimeout(function () {
							$img.addClass('fadein');
						}, 10);		
						
				}
				
			};
			this.init = function(options) {
				// convert all the images
				
				if (!cssfilters) {

					$container.filter('.badge').each(function(index, tmpImageWrapper) {
						var $imageWrapper = $(tmpImageWrapper),
								$pic = $imageWrapper.find('img');
							_injectTagsFlickr($pic, $imageWrapper);
					});

					if (hoverEffect) {

						$('.flickr-badge')
							.on('mouseenter', 'a', _onMouseEnter)
							.on('mouseleave', 'a', _onMouseLeave);

					}	
					
				}
				
				$container.each(function(index, tmpImageWrapper) {
					var $imageWrapper = $(tmpImageWrapper),
							$pic = $imageWrapper.find('img');
							
					if (!$pic.width()) {
						$pic.on("load", function() {
							_injectTags($pic, $imageWrapper);
						});
					}
					else {
						_injectTags($pic, $imageWrapper);
					}
					
				});
				
				// start the webworker
				if (BnWWorker) {
					// web worker implementation
					_webWorkerLoop();
				}
				// binding the hover effect
				if (hoverEffect) {
				
					 $container
						.on('mouseenter', _onMouseEnter)
						.on('mouseleave', _onMouseLeave);
					 
				}

				// make it responsive
				if (responsive) {
					$window.on('resize orientationchange', $container.resizeImages);
				}
				
			};

			this.resizeImages = function() {

				$container.each(function(index, currImageWrapper) {
					var pic = $(currImageWrapper).find('img:not(.BWFilter)');
					var currWidth, currHeight;
					if (isIE7) {
						currWidth = $(pic).prop('width');
						currHeight = $(pic).prop('height');
					} else {
						currWidth = $(pic).width();
						currHeight = $(pic).height();
					}
					
					$(this).find('.BWFilter, canvas').css({
						width: currWidth,
						height: currHeight
					});

				});
			};
			
			return this.init(options);
			
		}

	});
	
}(jQuery));