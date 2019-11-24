/** Web Dev Custom Script **/

jQuery(document).ready(function($) {

	/* fixed sidebar width */
	function setHeight() {
		var adminbarHeight = $('#wpadminbar').outerHeight();
		var headerHeight = $("#masthead").outerHeight();
		var windowHeight = $(window).outerHeight() - headerHeight - adminbarHeight;
		$('#main_content, #sidebar_inner, #content_inner').css({ height: windowHeight });
		$('.main_content_inner').css({ 'min-height': windowHeight });
	}

	/* Enabling Scrollbar */
	function sidebarScrollbar() {

		var adminbarHeight = $('#wpadminbar').outerHeight();
		var headerHeight = $("#masthead").outerHeight();
		var windowHeight = $(window).outerHeight() - headerHeight - adminbarHeight;
		var sidebarHeight = $('#sidebar_content').outerHeight();
		var sidebarHeight2 = $('.main_content_inner').outerHeight();
		var padding = windowHeight - sidebarHeight + 80;

		if (sidebarHeight > windowHeight) {
			$('#sidebar_inner').find('.simplebar-track').show();
			$('.sidebar_main').css('padding-bottom', '80px');
		} else if (sidebarHeight < windowHeight) {
			$('#sidebar_inner').find('.simplebar-track').hide();
			$('.sidebar_main').css('padding-bottom', padding);
		}

		if (sidebarHeight2 > windowHeight) {
			$('#main_content').find('.simplebar-track').show();	
		} else {
			$('#main_content').find('.simplebar-track').hide();
		}
	}

	/* Page load Init */
	$(window).on('load resize', function() {
		if ( $(window).outerWidth() > 1024 ) {
			setHeight();
			sidebarScrollbar();
		} else {
			$('#main_content, #sidebar_inner, #content_inner').css('height', 'initial');
			$('.main_content_inner').css('min-height', 'initial');
			moveSocial();
		}
		if ( $(window).outerWidth() > 1472 ) {
			$('.monessa_head_wrapper:first-child .monessa_head_each').addClass('active');
			$('.mob_pc .monessa_content_each').each(function() {
				$(this).css('visibility', 'hidden');
			});
			$('.mob_pc .monessa_content_each:first-child').css('visibility', 'visible');
		} else {
			$('.monessa_head_each').each(function() {
				$(this).removeClass('active');
			});
		}
		if ( $(window).outerWidth() < 481 ) {
			
		} else if ( $(window).outerWidth() < 1473 ) {
			$('.monessa_head_wrapper:first-child .monessa_head_each').removeClass('active');
			$('.monessa_head_wrapper:first-child .mob_monessa').css('display', 'none');
		}
	});

	$(window).on('load', function() {
		if ( $(window).outerWidth() < 481 ) {
			$('.monessa_head_wrapper .monessa_head_each').removeClass('active');
			$('.monessa_head_wrapper .mob_monessa').css('display', 'none');
		}
	});

	/* Sidebar middle menu switcher */
	$("#menu_switcher strong").on('click', function() {
		var status = $(this).closest('#menu_switcher').attr('status');
		var ref = $(this).attr('ref');
		var cus_url = $(this).attr('cus_url');
		var cur = $(this).attr('cur');
		if ( status == '' ) {
			$(this).closest('#menu_switcher').addClass('enable');
			$(this).addClass('active');
			if ( ref == 'palve' ) {
				$(this).closest('#menu_switcher').attr('status', 'palve');
				$('.service_menu_content').slideDown('slow', function() {

				});
				setTimeout(function() {
					sidebarScrollbar();
				}, 1000);
			}
			if ( ref == 'ajan' ) {
				$(this).closest('#menu_switcher').attr('status', 'ajan');
				$(location).attr('href', cus_url);
			}
			if ( ref == 'hinna' ) {
				$(this).closest('#menu_switcher').attr('status', 'hinna');
				$(location).attr('href', cus_url);
			}
		} else {
			if ( status != ref ) {
				$(this).closest('#menu_switcher').attr('status', ref);
				$("#menu_switcher strong").each(function() {
					$(this).removeClass('active');
				});
				$(this).addClass('active');
				if ( ref == 'palve' ) {
					$('.service_menu_content').slideDown('slow', function() {
						
					});
					setTimeout(function() {
						sidebarScrollbar();
					}, 1000);
				} else {
					$('.service_menu_content').slideUp('slow', function() {
						
					});
					setTimeout(function() {
						sidebarScrollbar();
					}, 1000);
					if ( cur != 'current' ) {
						$(location).attr('href', cus_url);
					}
				}
			} else { 
				if ( ref == 'palve' ) {
					$(this).closest('#menu_switcher').attr('status', '');
					$(this).closest('#menu_switcher').removeClass('enable');
					$(this).removeClass('active');
					$('.service_menu_content').slideUp('slow', function() {
						
					});
					setTimeout(function() {
						sidebarScrollbar();
					}, 1000);
				}
			}
		}
	});

	/* Sidebar active service finding */
	$('.service_menu_col ul li').each(function() {

		var service_id = $(this).attr('service_id');
		var cat_id = $(this).attr('cat_id');

		if ( $('#service_level').length > 0 ) {
			var service_name = $('#service_name').val();
			var service_cat = $('#service_cat').val();
			var service_level = $('#service_level').val();
			if ( service_level == 0 ) {
				if ( service_id == service_name ) {
					$(this).addClass('active');
				}
			} else {
				if ( cat_id == service_cat ) {
					$(this).addClass('active');
				}
			}
		}

	});

	/* Sidebar sub service visible */
	$('.service_menu_col ul li.menu_level2 a').on('click', function(e) {
		e.preventDefault();
		var service_id = $(this).closest('.menu_level2').attr('service_id');
		if ( $(this).closest('.service_level2').find('.menu_level1').hasClass('active') ) {			
			$('.service_tab').each(function() {
				$(this).attr('active', 'off');
				$(this).removeClass('active');
				$(this).find('.service_tab_content').slideUp('fast', function() {

				});
				if ( service_id == $(this).attr('service_num') ) {
					$(this).attr('active', 'on');
					$(this).addClass('active');
					$(this).find('.service_tab_content').slideDown('slow', function() {

					});
				}
			});
		} else {
			$('#service_name').val(service_id);
			var url = $(this).closest('.service_level2').find('.menu_level1').find('a').attr('href');
			$('#service_info').attr('action', url);
			$('#service_info').submit();
		}
	});

	$('.service_menu_col ul li.menu_level1 a').on('click', function(e) {
		if ( $(this).closest('.menu_level1').hasClass('active') ) {
			e.preventDefault();
		}		
	});

	/* When Clicking sub service item, proper service activation */
	function activeService() {
		if ( $('#submit_service').val() ) {
			$('.service_tab').each(function() {
				var service_num = $(this).attr('service_num');
				if ( $('#submit_service').val() == service_num ) {
					$(this).addClass('class');
					$(this).attr('active', 'on');
					$(this).find('.service_tab_content').slideDown(400, function() {

					});
				}
			});
		}
	} activeService();

	/** Service sub list accordian tabs */
	$('.service_tab_title').on('click', function() {

		var active_status = $(this).closest('.service_tab').attr('active');
		$(this).closest('.service_tab').toggleClass('active');
		if ( active_status == 'on' ) {
			$(this).siblings('.service_tab_content').slideUp('slow', function() {

			});
			$(this).closest('.service_tab').attr('active', 'off');
		} else {
			$(this).siblings('.service_tab_content').slideDown('slow', function() {

			});
			$(this).closest('.service_tab').attr('active', 'on');
		}

	});

	/* Top info hover effect */
	$('.top_info').hover (
		function() {
			$(this).find('span').toggleClass('active');
			$(this).find('a').toggleClass('active');
		}, function() {
			$(this).find('span').toggleClass('active');
			$(this).find('a').toggleClass('active');
		}
	);

	/* Main menu current status keeping */
	$('#menu-main-menu > li > a').on('click', function(e) {
		if ( $(this).closest('li').hasClass('current-menu-item') ) {
			e.preventDefault();
		}
	});

	/* Rekrytointi Page accordian tabs */
	$('.rekry_tab_title').on('click', function() {
		if ( $(this).closest('.rekry_tab').hasClass('active') ) {
			$(this).siblings('.rekry_tab_content').slideUp('slow', function() {

			});
			$(this).closest('.rekry_tab').removeClass('active');
		} else {
			$(this).siblings('.rekry_tab_content').slideDown('slow', function() {

			});
			$(this).closest('.rekry_tab').addClass('active');
		}
	});

	/* Monessa Page top block click handler */
	$('.monessa_head_each').on('click', function() {
		var status = $(this).find('.monessa_head_each_inner').attr('status');		
		if ( $(this).hasClass('active') ) {

			if ( $(window).outerWidth() < 1473 ) {
				$('.monessa_content_each.mob_monessa').each(function() {
					var stat = $(this).attr('status');
					if ( stat == status ) {
						$(this).slideUp('slow', function() {

						});
					}
				});
				$(this).removeClass('active');
			}

		} else  {

			if ( $(window).outerWidth() > 1472 ) {
				$('.monessa_head_each').removeClass('active');
				$(this).addClass('active');
				$('.mob_pc .monessa_content_each').css('visibility', 'hidden');
				$('.mob_pc .monessa_content_each').each(function() {
					var stat = $(this).attr('status');
					if ( stat == status ) {
						$(this).css('visibility', 'visible');
					}
				});
			} else if ( $(window).outerWidth() > 480 ) {
				$('.monessa_head_each').removeClass('active');
				$(this).addClass('active');
				$('.monessa_content_each.mob_monessa').css('display', 'none');
				$('.monessa_content_each.mob_monessa').each(function() {
					var stat = $(this).attr('status');
					if ( stat == status ) {
						$(this).slideDown('slow', function() {

						});
					}
				});
			} else {
				$(this).addClass('active');
				$('.monessa_content_each.mob_monessa').each(function() {
					var stat = $(this).attr('status');
					if ( stat == status ) {
						$(this).slideDown('slow', function() {

						});
					}
				});
			}

		}
	});

	/** Move social navigation to proper position in less than tablet version **/
	function moveSocial() {
		$('.mobmenu .mobmenur-container').before($('.social-navigation'));
		$('.mobmenu .mobmenur-container').before($('.home_icon'));
	}	

});