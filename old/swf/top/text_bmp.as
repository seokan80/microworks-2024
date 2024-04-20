
package  {
	import flash.text.TextField;
	import flash.text.TextFormat;
	import flash.geom.ColorTransform;
	import flash.filters.GlowFilter;
	import flash.filters.BlurFilter;
	import flash.display.Bitmap;
	import flash.display.BitmapData;
	import flash.text.Font;
	
	public class text_bmp {
		private var txt:TextField = new TextField();
		private var txt2:TextField = new TextField();
		private var format:TextFormat =new TextFormat();
		private var CorNum:Array;
		private var Cor:ColorTransform;
		public var allFonts:Array
		public function text_bmp() {
			// constructor code
			allFonts = Font.enumerateFonts(true);
			allFonts.sortOn("fontName", Array.CASEINSENSITIVE);
		}
		

		public function ColorFun (N:String):Array {
			N = N.split("0x").join("").split("#").join("")
			var R:Number = Number("0x"+N.substr(0,2));
			var G:Number = Number("0x"+N.substr(2,2));
			var B:Number = Number("0x"+N.substr(4,2));
			return new Array(R,G,B);
		}
		
		public function setColor (N:String):ColorTransform {
			var CorNum:Array = ColorFun(N) // 16진수갑
			return new ColorTransform(1,1,1,1,CorNum[0],CorNum[1],CorNum[2],0);
			//mc.transform.colorTransform = Cor;
		}
		
		
		public function TextMap (obj:Object):Bitmap {
			format.font 	= obj.font;//allFonts[0].fontName;
			format.size 	= 80;
			//format.color	= obj.color
			format.letterSpacing =  obj.ls ;
			
			format.bold 	= obj.b;
			//format.italic 	= obj.i;
			//format.underline= obj.u;   trace(obj.font);
			
			txt.text 	= obj.text;
			txt.setTextFormat (format);
			txt.width 	= txt.textWidth + 4;
			txt.height 	= txt.textHeight + 4;
			txt.filters = [ new GlowFilter(0,1,2,2,90000,1), new BlurFilter(5,5,2)];
			
			format.size = obj.size;
			txt2.text 	= obj.text;
			txt2.setTextFormat (format);
			txt2.width 	= txt2.textWidth + 4;
			
			var Bit:BitmapData = new BitmapData(txt.textWidth + 4,txt.textHeight + 4,true,0x00000000);
			Bit.draw (txt);
			var Bmi:Bitmap = new Bitmap(Bit);
			Bmi.height = txt2.textHeight + 4;
			Bmi.scaleX = Bmi.scaleY;
			Bmi.x -= Bmi.width * .5; Bmi.y -= Bmi.height * .5;
			Bmi.transform.colorTransform = setColor (String(obj.color));
			return (Bmi);
			//while (mc.numChildren) {mc.removeChildAt (0);}
			//mc.addChild (Bmi);
	
		}

	}
	
}
