//back返回事件
		(function(w){
			var ws=null,waiting=null;
			w.back=function(hide){
			if(w.plus){
				ws||(ws=plus.webview.currentWebview());
				if(hide||ws.preate){
					ws.hide('auto');
				}else{
					ws.close('auto');
				}
			}else if(history.length>1){
				history.back();
			}else{
				w.close();
			}
		};
		//关闭等待框
		w.closeWaiting=function(){
			waiting&&waiting.close();
			waiting=null;
		}
    })(window);
    (function( $,owner){
    	owner.createState = function(name, callback) {
		var state = owner.getState();
		state.account = name;
		state.token = "token123456789";
		owner.setState(state);
		return callback();
	};
    	/**
	 * 获取当前状态
	 **/
	owner.getState = function() {
		var stateText = localStorage.getItem('$state') || "{}";
		return JSON.parse(stateText);
	};

	/**
	 * 设置当前状态
	 **/
	owner.setState = function(state) {
		state = state || {};
		localStorage.setItem('$state', JSON.stringify(state));
		//var settings = owner.getSettings();
		//settings.gestures = '';
		//owner.setSettings(settings);
	};

	
    }(mui,window.app = {}));
