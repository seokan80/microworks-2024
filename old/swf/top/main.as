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


	public class main extends MovieClip {
		private var xmlFile:Array = new Array("asapro2.xml","/image/swf/asapro2_menu.xml","http://testasadal.com/image/swf/asapro2_menu.xml");
		private var xmlRoute:String = xmlFile[0];

		private var Total:int;
		private var opt:Object = new Object();
		private var time:Timer = new Timer(500,1);
		
		
		public var Field:text_bmp = new text_bmp  ;
		public var LoDate:var_load = new var_load  ;
		public var Ao:Array = new Array();
		public var menuColor:Array = new Array();
		public var subColor:Array = new Array();

		public var mNum:Number = -1;
		public var sNum:Number = -1;
		
		
		
		public function main () {
			stage.align = StageAlign.TOP_LEFT;
			stage.scaleMode = StageScaleMode.NO_SCALE;
			stage.showDefaultContextMenu = false;
			xmlRoute += "?"+Math.random();
			// 파라미덜 갑을 정의 한다 .
			var param:Object = loaderInfo.parameters;
			mNum = Number(param["mNum"] ? param["mNum"] : -1);
			sNum = Number(param["sNum"] ? param["sNum"] : -1);
			xmlRoute = param["xml"] ? param["xml"] : xmlRoute;
			time.addEventListener(TimerEvent.TIMER,reFarameter)
			
			// xml 파일을 다운 로드 한다.
			LoDate.LoadData (xmlRoute,{file:"xml"},{Com:Com});
		}
		
		
		
		
		//-------------------------------------------------------
		// 네모 박스 생성 함수 
		private function drawRectHit (width:Number,height:Number):MovieClip {
			var drawRect:MovieClip = new MovieClip ;
			drawRect.graphics.beginFill(0,0);
			drawRect.graphics.drawRect(width * -.5 , height * -.5 , width ,height)
			return drawRect;
		}
		//-------------------------------------------------------
		// xml 파일 속성 갑을 정의 한다 
		private function getXmlDate (data:Object):Object {
			//var Title:String = data.attribute("title").split("+").join("%20")
			var obj:Object =new Object();
			obj.Text = decodeURIComponent(data.attribute("title").split("+").join(" "));
			obj.Link = data.attribute("link");
			obj.Targ = data.attribute("target");
			return obj;
		}
		//-------------------------------------------------------
		// 메뉴 구조를 생성 시킨다 . 
		public function Com (event):void {
			var myXml:XML = new XML(event.target.data);
			Total = myXml.menu.length();
			//trace(myXml);
			// 메뉴 옵션 을 정의 한다.
			var option:Object = myXml.option.attributes();
			for (var i:int in option) {
				opt[String(option[i].name())] =  Number(option[i]);
			}
			
			opt.w_size = 620;// 평균배치 넓이 범위
			opt.m = 10;
			
			opt.xMenu= 50; // 메뉴 시작 x위치
			opt.yMenu= 35; // 메뉴 시작 y위치
			
			
			//opt.w_size += opt.xMenu;
			opt.sMenu = opt.xMenu;
			opt.mMenuSpace=0; //메뉴사이 거리
			opt.sMenuSpace=10; //서브사이거리
			
			
			opt.xSub = 20;
			opt.ySub = 70;// 서부메뉴 위치 
			
			opt.sSub = Number(opt.xSub);
			 
			opt.menuOutColor   = "0x444d54";
			opt.menuOverColor  = "0x3e7515";
			opt.subOutColor    = "0xffffff";
			opt.subOverColor   = "0x1d1d1d";
			
			menuColor  = [Field.ColorFun(opt.menuOutColor), Field.ColorFun(opt.menuOverColor)];
			subColor   = [Field.ColorFun(opt.subOutColor),  Field.ColorFun(opt.subOverColor)];
			
			opt.mMenuXscale  =  110;// 메뉴 확대 싸이즈
			opt.mMenuYscale  =  110;
			opt.mMenuXscale2 =  100;// 메뉴 축소 싸이즈
			opt.mMenuYscale2 =  100;
			
			opt.sMenuXscale  =	 105; //서브 확대 싸이즈 
			opt.sMenuYscale  =	 105;
			opt.sMenuXscale2 =	 100; //서브 축소 싸이즈
			opt.sMenuYscale2 =	 100;
			
			opt.menuFont = 	"Rix고딕 EB";//메인 텍스트 폰트 
			opt.subFont  =  "Rix고딕 B";//서브 텍스트 폰트
			trace(opt.subFont)
			
			opt.menuFontB = 	false;//메인 텍스트 폰트 
			opt.subFontB  =  	false;//서브 텍스트 폰트
			
			opt.menuFuntSize = 	 14;//메인 텍스트 싸이즈 
			opt.subFuntSize  = 	 11;//서브 텍스트 싸이즈 
			
			opt.menuFuntSpacing = 	 -1;//메뉴 글사이 간격 
			opt.subFuntSpacing  = 	 -1;//서브 글사이 간격 
			
			
			//mNum = 3;
			//sNum = 0;
			
//<option
//	xMenu="50" // 메뉴 시작 x위치
//	yMenu="10" // 메뉴 시작 y위치
//	mMenuSpace="40" 메뉴사이 거리
//	sMenuSpace="20" 서브사이거리
//	mBorderView = "1" 메뉴 경게선 
//	sBorderView = "1" 서브 경게선
//	subMargin = "60" 서브여백 수치
///>
//	
//<topMemuFontStyle  funt="-지희B" size="13" spacing="-1" colorOver="0xFFFFFF" colorOut="0xB2E7F9" scaleMin="100" scaleMax="130" />
//<topSubsFontStyle  funt="-지희B" size="10" spacing="-3" colorOver="0x707070" colorOut="0x4892BC" scaleMin="100" scaleMax="110" />
//	
//<leftMemuFontStyle funt="-지희B" size="12" spacing="-1" colorOver="0x666666" colorOut="0x000000" />
//<leftSubsFontStyle funt="-지희B" size="10" spacing="-3" colorOver="0x999999" colorOut="0x000000" />

			
			//var xsize:Array = new Array();
			//var ww = 630/Total
			for (i = 0; i < Total; i++) {
				var obj:Object = getXmlDate(myXml.menu[i]);
				var MenuBut:MovieClip = new MovieClip ;
				MenuBut.addChild (Field.TextMap({text:obj.Text,font:opt.menuFont,color:opt.menuOutColor,size:opt.menuFuntSize,b:opt.menuFontB?true:false,ls:opt.menuFuntSpacing}));
				MenuBut.scaleX = MenuBut.scaleY = opt.mMenuXscale2*.01;
				MenuBut.x  = MenuBut.width  * .5 + opt.xMenu;
				MenuBut.y  = MenuBut.height * .5 + opt.yMenu;
				MenuBut.mMenuScale = [opt.mMenuXscale * .01,opt.mMenuYscale * .01]; // 최대 커질 싸이즈
				MenuBut.RGB =  [menuColor[0][0],menuColor[0][1],menuColor[0][2]];// 변할 색상 
				if(opt.mBorderView && i){// ---------------- 분류선을 추가 
					var Ln:line = new line();
					Ln.x = int(opt.xMenu - opt.mMenuSpace * 0.5);
					Ln.y = int((MenuBut.height - Ln.height) * .5  + opt.yMenu);
					addChild(Ln);//setChildIndex(Ln,1);
					//xsize.push(Ln);
				}  
				opt.xMenu += MenuBut.width + opt.mMenuSpace;
				addChild (MenuBut);
				//------  톺 메뉴 희트 영역   ------
				var Hit:MovieClip = drawRectHit(MenuBut.width +opt.mMenuSpace,30)
				Hit.x = MenuBut.x  ;Hit.y = MenuBut.y;
				Hit.Link = [obj.Link , obj.Targ , i , -1];
				Hit.No = i;
				Hit.buttonMode = true;
				Hit.addEventListener(MouseEvent.MOUSE_OVER,MenuButFun);
				Hit.addEventListener(MouseEvent.MOUSE_OUT, MenuButFun);
				Hit.addEventListener(MouseEvent.CLICK,MenuButFun);
				MenuBut.Hit = Hit;
				MenuBut.Ln = Ln;
				addChild (Hit);
				/**/
				
				//========================================================================================
				//        -------------            서브페이지 내용물들               --------------   
				//========================================================================================
				var Sub:MovieClip = new MovieClip ;
				var Bg:bg = new bg();
				
				
				Bg.scale9Grid = new Rectangle(20,12,100,1);
				Sub.addChild (Bg);
				Sub.visible = false ; 
				addChild (Sub);
				
				
				var SubXml = myXml.menu[i].sub;
				for (var j:int = 0; j < SubXml.length(); j++) {
					var SubBut:MovieClip = new MovieClip ;
					obj = getXmlDate(SubXml[j]);
					SubBut.addChild (Field.TextMap({text:obj.Text,font:opt.subFont,color:opt.subOutColor,size:opt.subFuntSize,b:opt.subFontB ? true:false,ls:opt.subFuntSpacing}));
					SubBut.scaleX = SubBut.scaleY = opt.sMenuXscale2*.01;
					SubBut.x  = SubBut.width  * .5 + ( j ? opt.xSub : opt.xSub = opt.sSub);
					SubBut.y  = SubBut.height * .5 + 4;
					//-----------------------------
					SubBut.Y = SubBut.y ;// 원 위치 정보;
					SubBut.C = 0 ; // 탄력을 정하는 변수
					SubBut.sMenuScale = [opt.sMenuXscale * .01,opt.sMenuYscale * .01]; // 최대 커질 싸이즈
					SubBut.RGB =  [subColor[1][0],subColor[1][1],subColor[1][2]]; // 칼라
					
					if(opt.sBorderView && 0){ // ---------------- 분류선을 추가 
						var Ln2 = new line2();
						Ln2.x = int(opt.xSub - opt.sMenuSpace  * .5);
						Ln2.y = int((SubBut.height - Ln2.height) * .5  + 0);
						Ln2.Y = Ln2.y;
						Ln2.C = 0;
						Sub.addChild(Ln2);//Sub.setChildIndex(Ln,1);
						
					} 
					var Hat:hat = new hat();
					Hat.y = -SubBut.y; Hat.visible = false;
					SubBut.addChild(Hat);
					opt.xSub += SubBut.width + opt.sMenuSpace;
					Sub.addChild (SubBut);
					//------  서브 메뉴 희트 영역   ------
					Hit = drawRectHit(SubBut.width +opt.sMenuSpace +2 ,40);// +2는 (  |  )선의 영향을 피면하기 위해서이다.
					Hit.Link = [obj.Link , obj.Targ , i , j];//trace(SubBut.Link);
					Hit.No = i;
					Hit.buttonMode = true;
					Hit.addEventListener(MouseEvent.MOUSE_OVER,SubButFun);
					Hit.addEventListener(MouseEvent.MOUSE_OUT, SubButFun);
					Hit.addEventListener(MouseEvent.CLICK, SubButFun);
					SubBut.addChild (Hit);
				}
				
				
				
				//   -------   배경 이미지 위치를 이쁘게 배치.   --------
				Bg.width = opt.xSub + opt.sSub  ; 
				Sub.x = opt.sMenu ;
				//Sub.x = Sub.x <opt.sMenu-opt.m ?  opt.sMenu-opt.m : Sub.x > opt.w_size+opt.m - Sub.width ? opt.w_size+opt.m - Sub.width : Sub.x;
				Sub.y = opt.ySub;// 서부메뉴 위치 
				//xsize.push(Hit)
				Ao.push([MenuBut,Sub]);// 내용 추가 ;
				
			}
			

			var w:Number = 0 ;
			for(i=0; i<Total; i++){	w += Ao[0][0].width;}
			w = (opt.w_size - w)/(Total-1);
			opt.w_size += opt.sMenu;
			var wLn:int = w * .5;
			for(i=1; i<Total; i++){
				Ao[i][0].Hit.x = Ao[i][0].x +=  w * i;
				Ao[i][0].Ln.x += w * i - wLn;
				//-------------------
				Sub = Ao[i][1]
				Sub.x = Ao[i][0].x - Sub.width *.5 ;
				Sub.x = Sub.x <opt.sMenu-opt.m ? opt.sMenu-opt.m : Sub.x > opt.w_size+opt.m - Sub.width ? opt.w_size+opt.m - Sub.width : Sub.x;
			}
			
			
			reFarameter(null);
		}
		
		private function reFarameter (event:TimerEvent):void {
			if( mNum> -1 ){ 
				menuOverFun(Ao[mNum][0],Ao[mNum][1]);
				if( sNum> -1 ){ 
					subOverFun(Ao[mNum][2] = Ao[mNum][1].getChildAt(sNum*2+1)) 
				};
			};
		}
		//================================================================
		//  ------------        모든 버튼 액선 함수 틀     -------------
		//================================================================
		private function MenuButFun (event:MouseEvent):void {//---------------- 톱메뉴 버튼 액션 부분 
			var Menu:MovieClip = Ao[event.target.No][0] as MovieClip;
			var Sub:MovieClip  = Ao[event.target.No][1] as MovieClip;
			if(event.type =="click"){//trace(event.target.Link) ;
				LoDate.Links(event.target.Link[0],{M:event.target.Link[2],S:event.target.Link[3]},event.target.Link[1]);
			}else if(event.type =="mouseOver"){
				mNum> -1 ? menuOutFun(Ao[mNum][0],Ao[mNum][1],Ao[mNum][2]):false; // 먼저 메뉴를 죽인다.
				menuOverFun(Menu,Sub);
			} else if(event.type =="mouseOut"){
				menuOutFun(Menu,Sub,null);
			}time.stop();
		}
		private function SubButFun (event:MouseEvent):void {//------------------ 서부 메뉴 버튼 액션 부분 
			var Menu:MovieClip = Ao[event.target.No][0] as MovieClip;
			var Sub:MovieClip  = Ao[event.target.No][1] as MovieClip;
			var sSub:MovieClip = 	event.target.parent as MovieClip;
			if(event.type =="click"){//trace(event.target.Link) ;
				LoDate.Links(event.target.Link[0],{M:event.target.Link[2],S:event.target.Link[3]},event.target.Link[1]);
			}else if(event.type =="mouseOver"){
				//sSub.Hat.visible = true;
				sNum> -1 ? subOutFun(Ao[mNum][2]):false;
				menuSubOverFun (Menu,Sub);
				subOverFun(sSub);
			} else if(event.type =="mouseOut"){
				menuOutFun(Menu,Sub,sSub)
				//sSub.Hat.visible = false;
			}time.stop();
		}
		//================================================================
		//                                                              //
		//                                                              //
		//               개개 버튼에 따라 실행할 함수들                 //   
		//                                                              //
		//                                                              //
		//================================================================
		//                        메뉴 오버 시                           //
		//================================================================
		private function menuOverFun(Menu:MovieClip,Sub:MovieClip):void {// --- 톱 메뉴 오버시 1차 실행
			Sub.Num = 0;//trace("alpha")
			Sub.alpha = 0;
			Sub.visible = true ; 
			setChildIndex(Sub,numChildren-1);
			for(var i:int=1;i<Sub.numChildren ; i++){
				Sub.getChildAt(i).y  = 60;
				Sub.getChildAt(i).alpha  = 0;
			}
			menuSubOverFun (Menu,Sub); // ------------------------------------- 서브 메뉴와 동일하게 사용 
		}
		private function menuSubOverFun(Menu:MovieClip,Sub:MovieClip):void {//- 서브 메뉴 오버시 1차 실행
			Menu.Max = Menu.mMenuScale;
			Menu.COR = [menuColor[1][0],menuColor[1][1],menuColor[1][2]];
			Sub.Ap = 1;
			Menu.addEventListener(Event.ENTER_FRAME,topMenuFun );
			Sub.addEventListener(Event.ENTER_FRAME,subMenuFun );
			Sub.getChildAt(0).addEventListener(Event.ENTER_FRAME,subMenuFunUpAni );
			//Sub.getChildAt(0).hat.x = Sub.getChildAt(sNum+1).x;
			
		}
		private function subOverFun(sSub:MovieClip):void {//------------------- 개개 서브메뉴 오버시 1차 실행
			sSub.Max = sSub.sMenuScale;// 서부메뉴 싸이즈 최대화 
			sSub.COR = [subColor[1][0],subColor[1][1],subColor[1][2]]; // 칼라
			sSub.addEventListener(Event.ENTER_FRAME,topMenuFun );// 톱 메뉴 애니 
		}
		//================================================================
		//                        메뉴 빠졌을때 
		//================================================================
		private function menuOutFun(Menu:MovieClip,Sub:MovieClip,sSub:MovieClip):void {// 전체 적용 
			Menu.Max = [Number(opt.mMenuXscale2)*.01,Number(opt.mMenuXscale2)*.01];
			Menu.COR = [menuColor[0][0],menuColor[0][1],menuColor[0][2]];
			Menu.addEventListener(Event.ENTER_FRAME,topMenuFun );
			Sub.Ap = 0;
			Sub.addEventListener(Event.ENTER_FRAME,subMenuFun );
			//-------------------------------------------------
			sSub ? subOutFun(sSub) : false;//---------------------------------- 개개 서브메뉴가 있으면 원상 복구
		}
		private function subOutFun(sSub:MovieClip):void {
			sSub.Max = [Number(opt.sMenuXscale2)*.01,Number(opt.sMenuXscale2)*.01];//서부메뉴 싸이즈 원상 복구 
			sSub.COR = [subColor[0][0],subColor[0][1],subColor[0][2]];// 칼라
			sSub.addEventListener(Event.ENTER_FRAME,topMenuFun );// 톱 메뉴 애니
		}
		//================================================================
		
		
		
		
		
		
		//------------------------------------------------------------
		//         각 메뉴 객체의 칼라갑 을 정의 하는 함수
		//------------------------------------------------------------
		private function ButColorFun (Menu:MovieClip):void {
			Menu.RGB[0] += (Menu.COR[0] - Menu.RGB[0])*.4;
			Menu.RGB[1] += (Menu.COR[1] - Menu.RGB[1])*.4;
			Menu.RGB[2] += (Menu.COR[2] - Menu.RGB[2])*.4;
			var cor:ColorTransform = new ColorTransform(1, 1, 1, 1, Menu.RGB[0], Menu.RGB[1], Menu.RGB[2], 0)
			Menu.getChildAt(0).transform.colorTransform = cor
		}
		
		
		//------------------------------------------------------------
		// 윗메뉴 글이 커지는 동화 
		private function topMenuFun (event:Event):void {
			var Menu:MovieClip = event.target as MovieClip;
			Menu.scaleX +=(Menu.Max[0] - Menu.scaleX) * 0.2;
			Menu.scaleY +=(Menu.Max[1] - Menu.scaleY) * 0.2;
			ButColorFun(Menu);
			if(Math.abs(Menu.Max[0] - Menu.scaleX)+Math.abs(Menu.Max[1] - Menu.scaleY)<0.01){
				Menu.removeEventListener(Event.ENTER_FRAME,topMenuFun )
			}
		}
		//------------------------------------------------------------
		// 서부 메뉴 알파갑을 만드는 동화 
		private function subMenuFun (event:Event):void {
			var Sub:MovieClip = event.target as MovieClip;
			Sub.alpha +=(Sub.Ap - Sub.alpha) * 0.2;
			if(Math.abs(Sub.Ap - Sub.alpha) < 0.1){
				Sub.alpha = Sub.Ap 
				Sub.alpha == 0 ? Sub.visible = false : false;  
				Sub.removeEventListener(Event.ENTER_FRAME,subMenuFun );
				Sub.visible ? time.stop(): time.start();
			
			}
		}
		//------------------------------------------------------------
		// 서부 개개 메뉴가 올라오는 동화   타타타닥 올라오는 애니메이션 
		private function subMenuFunUpAni (event:Event):void {
			var Sub:MovieClip = event.target.parent as MovieClip;
			Sub.Num+=0.5;
			Sub.Num = Sub.Num >  Sub.numChildren ? Sub.numChildren : Sub.Num
			for(var i:int = 1;i< Sub.Num ; i++){
				var sSub:MovieClip = Sub.getChildAt(i) as MovieClip ;
				sSub.C = (sSub.C + (sSub.Y - sSub.y) * .2) * .6;
				sSub.y += sSub.C ;
				sSub.alpha = 1-(sSub.y - sSub.Y)*.10;
			}
			 sSub = Sub.getChildAt(Sub.numChildren - 1) as MovieClip;
			if(sSub.alpha == 1 ){//trace("y");
				event.target.removeEventListener(Event.ENTER_FRAME,subMenuFunUpAni );
			}
		}





		
		

	}

}











/**/