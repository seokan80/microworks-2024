package {
	import flash.net.URLRequest;
	import flash.net.URLVariables;
	import flash.net.URLLoader;
	import flash.net.URLLoaderDataFormat;
	import flash.net.URLRequestMethod;
	import flash.net.navigateToURL;

	import flash.events.ProgressEvent;
	import flash.events.IOErrorEvent;
	import flash.events.Event;

	public class var_load {
		//=============================================================================//
		//======================           构造函数           ==========================//
		//=============================================================================//
		//public function var_load ():void {}


		//--------------------------------------------------------------------------------
		//  ----------------------     php 데터 불로오기    ----------------------------
		//--------------------------------------------------------------------------------
		
		public function LoadData (file:String,varobj:Object,fun:Object):void {
			var loader:URLLoader 	= new URLLoader;
			var Request:URLRequest 	= new URLRequest(file);
			var URLVar:URLVariables = new URLVariables;
			
			loader.addEventListener (Event.COMPLETE,fun.Com);
			fun.Pro ? loader.addEventListener (ProgressEvent.PROGRESS,fun.Pro)	:false;
			fun.Err ? loader.addEventListener (IOErrorEvent.IO_ERROR,fun.Err)	:false;
			
			if(varobj.file != "xml" ){
				loader.dataFormat = URLLoaderDataFormat.VARIABLES ;//必须填写
				for (var i:String in varobj) {
					URLVar[i] = varobj[i];//URLVar = varobj;
				}
				Request.method = URLRequestMethod.POST;
				Request.data = URLVar;
			}
			try{loader.load (Request);}catch (e:Error){trace(e,"---------");}
			
		}




		//--------------------------------------------------------------------------------
		//  -------------------                링크걸기              -------------------
		//--------------------------------------------------------------------------------
		public function Links (file:String,varobj:Object,target:String="_self",method:String = "POST"):void {
			var Request:URLRequest = new URLRequest(file);
			var URLVar:URLVariables = new URLVariables;
			for (var i:String in varobj) {
				URLVar[i] = varobj[i];
			}
			method == "POST" ? Request.method = URLRequestMethod.POST : false;
			Request.data = URLVar;
			try {
				navigateToURL (Request,target);
			} catch (e:Error) {
				// handle error here
			}
		}












	}
}









/**/