//鼠标悬浮按钮显示
$(function(){
			var dom = $('#p1_picTurnPlayer');
			var btnL = $('.navbgR .btnL');
			var btnR = $('.navbgR .btnR');
			dom.hover(function(){
				btnL.css('display','block');
				btnR.css('display','block');
			},function(){
				btnL.css('display','none');
				btnR.css('display','none');
			});
		});
(function($, wind){
	//载入函数
	$(function(){
		(new accessibleFun('#accessibleTool', '#accessibleToolBtn')).init();
		(new funNavMenu('menu')).init();
		(new funNavMenu('mainMenu')).init();
		(new funPicTurnPlayer01('p1')).init();
		(new funTabColumn({id:'r1_tabColumn'})).init();
		(new funTabColumn({id:'r2_tabColumn'})).init();
		(new funTabColumn({id:'r3_tabColumn'})).init();
		(new funNavMenu('footer_menu',true)).init();
    });
	
	function accessibleFun(dom,btn){
		this.dom = $(dom);
		this.btn = $(btn);
		this.pText = this.dom.find('.pt');
		this.fZoomL = this.dom.find('.fzl');
		this.fZoomS = this.dom.find('.fzs');
		this.pZoomL = this.dom.find('.pzl');
		this.pZoomS = this.dom.find('.pzs');
		this.hContrast = this.dom.find('.hc');
		this.hContrastI = this.hContrast.find('i');
		this.hContrastOpt = this.hContrast.find('.opt');
		this.sLineO = this.dom.find('.slo');
		this.sLineC = this.dom.find('.slc');
		this.oBody = $('body');
		this.oBodyW = this.oBody.find('.bodyWrapper');
		this.bodyCon = $('#accessibleTool,#header, #container, #footer');
		//this.ele = this.bodyCon.find('*').add(this.oBody).add(this.bodyCon);
		this.ele = $('div,p,ul,li,dl,dd,dt,h1,h2,h3,h4,h5,h6,a,span,i,b,table,td,th,lable,input,form,select,aside,section,header,footer,article,nav,menu,center');
		this.bgImageNone = this.oBody.find('.topBanner').add(this.oBody.find('.zxbsFoot'));
		this.eleNormal = this.ele.not($('h2').add('h3').add('h2 *').add('h3 *'));
		this.elsH2H3 = $('h2, h3');
		this.elsH2H3L = this.elsH2H3.length;
		this.fSize = 12;
		this.pSize = 1;
		this.browser = $.browser;
	}
	accessibleFun.prototype = {
		constructor: accessibleFun,
		init: function(){
			var that = this;
			this.btn.toggle(
				function(){
					that.dom.css('display', 'block');
				},
				function(){
					that.dom.css('display', 'none');
				}
			);
			//this.plainText();
			this.fontZoomL();
			this.fontZoomS();
			this.pageZoomL();
			this.pageZoomS();
			this.highContrast();
			this.subline();
		},
		plainText: function(){
			this.pText.toggle(
				function(){
					$('img').css('display', 'none');
					$('link').remove();
					$('style').remove();
					$(this).html('视图模式');
				},
				function(){
					window.location.reload();
				}
			);
		},
		fontZoomL: function(){
			var that = this;
			this.fZoomL.click(function(){
				if(that.fSize<=18){
					that.fontZoom(2);
				}
			});
		},
		fontZoomS: function(){
			var that = this;
			this.fZoomS.click(function(){
				if(that.fSize>=14){
					that.fontZoom(-2);
				}
			});
		},
		fontZoom: function(step){
			this.fSize += step;
			this.eleNormal.css('font-size', this.fSize + 'px');
			for(var i=0; i<this.elsH2H3L; i++){
				var s = parseInt(this.elsH2H3.eq(i).css('font-size'), 10);
				this.elsH2H3.eq(i).css('font-size', (s+step) + 'px');
			}
		},
		pageZoomL: function(){
			var that = this;
			this.pZoomL.click(function(){
				if(that.pSize<2){
					that.pageZoom(0.1);
				}
			});
		},
		pageZoomS: function(){
			var that = this;
			this.pZoomS.click(function(){
				if(that.pSize>1){
					that.pageZoom(-0.1);
				}
			});
		},
		pageZoom: function(rate){
			this.pSize += rate;
			if(this.browser.msie){
				this.bodyCon.css('zoom', this.pSize);
			}else if(this.browser.mozilla){
				this.oBodyW.css({
					'-moz-transform-origin': 'top left',
					'-moz-transform': 'scale(' + this.pSize + ')'
				});
			}else if(this.browser.webkit){
				this.oBodyW.css({
					'-webkit-transform-origin': 'top left',
					'-webkit-transform': 'scale(' + this.pSize + ')'
				});
			}else if(this.browser.opera){
				this.oBodyW.css({
					'-o-transform-origin': 'top left',
					'-o-transform': 'scale(' + this.pSize + ')'
				});
			}
		},
		highContrast: function(){
			var that = this;
			this.hContrastI.toggle(
				function(){
					that.hContrastOpt.slideDown();
				},
				function(){
					that.hContrastOpt.slideUp();
				}
			);
			this.hContrast.find('.c1').click(function(){
				that.ele.not($('a')).css({
					'color': '#040404',
					'background-color': '#fff'
				});
				that.bgImageNone.css('background-image', 'none');
				that.ele.find('a').css({
					'color': '#016edd'
				});
				that.hContrastI.click();
			});
			this.hContrast.find('.c2').click(function(){
				that.ele.not($('a')).css({
					'color': '#fffc00',
					'background-color': '#016edd'
				});
				that.bgImageNone.css('background-image', 'none');
				that.ele.find('a').css({
					'color': '#fff'
				});
				that.hContrastI.click();
			});
			this.hContrast.find('.c3').click(function(){
				that.ele.not($('a')).css({
					'color': '#040404',
					'background-color': '#fff7b7'
				});
				that.bgImageNone.css('background-image', 'none');
				that.ele.find('a').css({
					'color': '#016edd'
				});
				that.hContrastI.click();
			});
			this.hContrast.find('.c4').click(function(){
				that.ele.not($('a')).css({
					'color': '#fff223',
					'background-color': '#383838'
				});
				that.bgImageNone.css('background-image', 'none');
				that.ele.find('a').css({
					'color': '#fff'
				});
				that.hContrastI.click();
			});
			this.hContrast.find('.c5').click(function(){
				window.location.reload();
			});
		},
		subline: function(){
			var that = this;
			this.sLineO.click(function(){
				var sLineX = $('<div id="sublineX"></div>'),
					sLineY = $('<div id="sublineY"></div>');
				that.oBody.append(sLineX).append(sLineY);
				sLineX.css({
					'width': $(document).width()+'px'
				});
				sLineY.css({
					'height': $(document).height()+'px'
				});
				
				that.oBody.bind('mousemove', function(e){
					sLineX.css('top', (e.pageY+10)+'px');
					sLineY.css('left', (e.pageX+10)+'px');
				});
				
				that.sLineC.click(function(){
					sLineX.remove();
					sLineY.remove();
					that.oBody.unbind('mousemove');
				});
			});
		}
	};
	
	//分栏
	var funTabColumn = function(conf){
		this.elem = $('#' + conf.id);
	    this.nav = !!conf.nav ? this.elem.find('.' + conf.nav + ' li') : this.elem.find('.nav li');
	    this.con = !!conf.con ? this.elem.find('.' + conf.con) : this.elem.find('.con');
	    this.cur = !!conf.cur ? conf.cur : 'cur';
	}
	
	funTabColumn.prototype = {
		constructor: funTabColumn,
	    init: function(){
	    	
	    	var that = this;
	        //alert(that.show);
	        that.nav.each(function(i){
	            $(this).mouseover(function(){
	            	that.show(i);
	            })
	        })
	    },
	    show: function(i){
	        var that = this;
	        that.index = i;
	        that.nav.removeClass(that.cur);
	        that.nav.eq(i).addClass(that.cur);
	        that.con.addClass('dsn');
	        that.con.eq(i).removeClass('dsn');
	    }
    }
    
    function funPicTurnPlayer(emID, fps){
	    this.elem = jQuery('#' + emID + '_picTurnPlayer');
	    this.nav = this.elem.find('.nav i');
	    this.pic = this.elem.find('.pic');
	    this.title=this.elem.find('.title');
	    this.timer = null;
	    this.index = 0;
	    this.len = this.nav.length;
	    this.fps = fps ? fps : 5000;
	}
	
	funPicTurnPlayer.prototype = {
	    constructor: funPicTurnPlayer,
	    init: function(){
	        var that = this;
	        that.nav.each(function(i){
	            jQuery(this).hover(function(){
	                that.show(i);
	                clearInterval(that.timer);
	                that.index = i;
	            }, function(){
	                that.play();
	            })
	        })
	        this.play();
	    },
	    nextIndex: function(val){
	        this.index += val;
	        if (this.index == this.len) {
	            this.index = 0;
	        }
			if (this.index < 0) {
	            this.index = this.len-1;
	        }
	    },
	    show: function(i){
			this.nav.removeClass('cur');
	        this.nav.eq(i).addClass('cur');
	        this.pic.hide();
	        this.pic.eq(i).show();
			this.title.hide();
			this.title.eq(i).show();
	    },
	    play: function(){
	        var that = this;
	        that.timer = setInterval(function(){
				that.nextIndex(1);
	            that.show(that.index);
	        }, that.fps);
	    }
	}
	
	function funPicTurnPlayer01(emID, fps){
	    //funPicTurnPlayer
	    funPicTurnPlayer.call(this, emID, fps);
		this.btnL = this.elem.find('.btnL');
		this.btnR = this.elem.find('.btnR');
	}
	
	funPicTurnPlayer01.prototype = new funPicTurnPlayer();
	funPicTurnPlayer01.prototype.init = function(){
	    var that = this;
	    that.nav.each(function(i){
	        jQuery(this).hover(function(){
	            that.show(i);
	            clearInterval(that.timer);
	            that.index = i;
	        }, function(){
	            that.play();
	        })
	    })
		that.btnR.click(function(){
			 that.nextIndex(1);
			 that.show(that.index);
		})
		that.btnL.click(function(){
			 that.nextIndex(-1);
			 that.show(that.index);
		})
	    that.play();
	}
	
	
	var funNavMenu = function(id,key){
		this.elem = $('#'+id);
		this.key = key
	}
	funNavMenu.prototype = {
		constructor : funNavMenu,
		init : function(){
			var that = this;
			
			if(typeof(HTMLElement)!="undefined") {
			      HTMLElement.prototype.contains=function(obj){
				   	  while(obj!=null&&typeof(obj.tagName)!='undefind'){
							if(obj==this)  return true;
                            obj=obj.parentNode;
					  }
			          return false;   
			      };
			}
			
			that.elem.delegate("li", "mouseover", function() {
				if(that.key===true){
					var h = $(this).find('.list').outerHeight();
					$(this).find('.list').css('top',(-h)+'px');
				}
			  	$(this).addClass('cur');
			  	$(this).find('.list').show();
			}).delegate("li", "mouseout", function() {
			  	$(this).find('.list').hide();
				$(this).removeClass('cur');
			});
			
		}
	};

})(jQuery, window)