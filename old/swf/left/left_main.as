package {

	import flash.display.MovieClip;
	import flash.display.Stage;
	import flash.display.StageAlign;
	import flash.display.StageScaleMode;
	import flash.display.LoaderInfo;
	
	import fl.motion.easing.Linear;
	import flash.geom.Rectangle;
	import flash.events.MouseEvent;
	import flash.events.Event;
	import flash.geom.ColorTransform;
	import flash.utils.Timer;
	import flash.events.TimerEvent;
	import flash.events.IOErrorEvent;
	import flash.display.Bitmap;
    //pareko@asadal.com

	public class left_main extends MovieClip {
		private var xmlFile:Array = new Array("asapro2.xml","/image/swf/asapro2_menu.xml","http://testasadal.com/image/swf/asapro2_menu.xml");
		private var xmlRoute:String = xmlFile[0];

		private var fontColor:Array = [[],[]];
		private var fontSize:Array = new Array(12,11);
		private var hitSize:Array = new Array(22,18);
		
		public var Field:text_bmp = new text_bmp();
		public var LoDate:var_load = new var_load();
		
		private var mNum:Number = -1;
		private var sT:String = "";
		private var sNumy:int = 0;
		private var Text:Bitmap;
		private var subFont:String;
	
		public function left_main () {
			stage.align = StageAlign.TOP_LEFT;
			stage.scaleMode = StageScaleMode.NO_SCALE;
			stage.showDefaultContextMenu = false;
			xmlRoute += "?"+Math.random(); 
			trace(xmlRoute)
			
			// 파라미덜 갑을 정의 한다 .
			var param:Object = loaderInfo.parameters;
			param["mNum"] ?  mNum = Number(param["mNum"]) : sT = param["st"];
			
			xmlRoute = param["xml"] ? param["xml"] : xmlRoute;
			
			// xml 파일을 다운 로드 한다.
			LoDate.LoadData (xmlRoute,{file:"xml"},{Com:Com,Err:Err});
			//mNum = 1;
			//sT = "community" 
		}
		public function Err (event):void {
			xmlRoute = xmlFile[0];
			mNum = 1;
			LoDate.LoadData (xmlRoute,{file:"xml"},{Com:Com,Err:Err});
		}
		//-------------------------------------------------------
		// 메뉴 구조를 생성 시킨다 . 
		public function Com (event):void {
			var myXml:XML = new XML(event.target.data);
			if(mNum<0){
				for(var i:int = 0; i < myXml.menu.length(); i++){
					if(sT == myXml.menu[i].attribute("id")){
						mNum = i;
						break;
					}					
				}
			}
			fontColor[0][0]  = "0x676565";
			fontColor[0][1]  = "0x6a9c2d";
			
			fontColor[1][0]  = myXml.leftSubsFontStyle.attribute("colorOut");
			fontColor[1][1]  = myXml.leftSubsFontStyle.attribute("colorOver");
			
			var Mf:String  = 	"Rix고딕 M";//메인 텍스트 폰트 
			var Sf:String  =  	myXml.topSubsFontStyle.attribute("funt");//서브 텍스트 폰트
			
			var Mb:Boolean = 	 Number(myXml.leftMemuFontStyle.attribute("b")) ? true :false;//메인 텍스트 폰트 
			var Sb:Boolean =  	 Number(myXml.leftSubsFontStyle.attribute("b")) ? true :false;//서브 텍스트 폰트
			
			var Ms:Number = 	 11;//메인 텍스트 싸이즈 
			var Ss:Number = 	 Number(myXml.leftSubsFontStyle.attribute("size"));//서브 텍스트 싸이즈 
			
			var Mls:Number = 	 -1;//메뉴 글사이 간격 
			var Sls:Number = 	 Number(myXml.leftSubsFontStyle.attribute("spacing"));//서브 글사이 간격 
			
			
			//subFont = "Malgun Gothic";myXml.option.attribute("subFont");trace(subFont);
			for (i = 0; i < myXml.menu[mNum].sub.length(); i++) {//2차 서브
				var hit:MovieClip = setMenuDesign(myXml.menu[mNum].sub[i], new line(),{font:Mf,color:fontColor[0][0],size:Ms,b:Mb,ls:Mls},[hitSize[0],i,true,fontColor[0]]);
				
				for (var j:int = 0; j < myXml.menu[mNum].sub[i].lastSub.length(); j++) {//3차 서브
					var sHit:MovieClip = setMenuDesign(myXml.menu[mNum].sub[i].lastSub[j], new MovieClip(),{font:Sf,color:fontColor[1][0],size:Ss,b:Sb,ls:Sls},[hitSize[1],i,false,fontColor[1]]);
					sHit.hit = hit;
				}
			}
		}
		
		//================================================================
		//  ------------        모든 버튼 액선 함수 틀     -------------
		//================================================================
		private function MenuButFun (event:MouseEvent):void {//---------------- 톱메뉴 버튼 액션 부분 
			var Menu:MovieClip = event.target as MovieClip;
			if(event.type =="click"){//trace(event.target.Link) ;
				LoDate.Links(Menu.Link[0],{M:Menu.Link[2],S:Menu.Link[3]},Menu.Link[1]);
			}else {
				var Ut:int = event.type == "mouseOver" ? 1 : 0
				
				Menu.Text[0].transform.colorTransform = Field.setColor(fontColor[1][Ut]);
				Menu.Text[1].transform.colorTransform = Field.setColor(fontColor[0][Ut]);
				
				try{Menu.hit.Text[2].gotoAndStop(Ut+1);	}catch(e:Error){}
				try{Menu.Text[2].gotoAndStop(Ut+1);		}catch(e:Error){}
			}
		}
		//-------------------------------------------------------
		// 네모 박스 생성 함수 
		private function drawRectHit (width:Number,height:Number):MovieClip {
			var drawRect:MovieClip = new MovieClip ;
			drawRect.graphics.beginFill(0,0);
			drawRect.graphics.drawRect(0 ,0 , width ,height)
			return drawRect;
		}
		//-------------------------------------------------------
		// xml 파일 속성 갑을 정의 한다 
		private function getXmlDate (data:Object):Object {
			var obj:Object =new Object();
			obj.Text = decodeURIComponent(data.attribute("title").split("+").join(" "));
			obj.Link = data.attribute("link");
			obj.Targ = data.attribute("target");
			return obj;
		}
		//-------------------------------------------------------
		// left Menu Design 메뉴의 디자인 설정을 한다.
		private function setMenuDesign (xml:Object,target:MovieClip,style:Object,csbhi:Array ):MovieClip {
			var obj:Object = getXmlDate(xml);style.text = obj.Text;
			var Bit:Bitmap = Field.TextMap(style);
			var Hit:MovieClip = drawRectHit(140,csbhi[0]);
			var MenuBut:MovieClip = target;
			Bit.x  = 15; Bit.y  = int((csbhi[0]-Bit.height)*.5)+1;
			Hit.x  = 0;  Hit.y  = 0;
			MenuBut.addChild (Bit);
			MenuBut.addChild (Hit);
			MenuBut.y = sNumy;
			MenuBut.x = 25
			addChild (MenuBut);
			target.hitArea = new MovieClip();
			//------  톺 메뉴 희트 영역   ------
			Hit.Text = [Bit, csbhi[2] ? Text = Bit : Text,target.icon];
			Hit.Link = [obj.Link, obj.Targ, mNum, csbhi[1], csbhi[3]];
			Hit.addEventListener(MouseEvent.MOUSE_OVER,MenuButFun);
			Hit.addEventListener(MouseEvent.MOUSE_OUT, MenuButFun);
			Hit.addEventListener(MouseEvent.CLICK,MenuButFun);
			sNumy += MenuBut.height;
			return(Hit)
		}
		//-------------------------------------------------------
		
		
		
		
	}				
}











/**/