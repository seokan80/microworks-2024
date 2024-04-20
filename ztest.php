
		
		<!--날씨 -->
              <div class="mweather">
				<script type="text/javascript">
					  $(document).ready(function () {
					  
					  function getWeather() {
						$.ajax({
							type : "post",
							dataType : "xml",
							url: "http://cablecar.ttdc.kr/weather.php",
							success:function(data){
										
								//alert(data);
							

								var row=$(data).find("wid").find("body").find("data");


								var cell = row.eq(0);

								var wimg = "<img src='../images/weather/"+cell.find("wfEn").text().replace(" ","")+".png'>";
								var wtmp = cell.find("temp").text()+"˚<em>C</em>";
								var wwind = cell.find("wdKor").text();
								var wws = cell.find("ws").text().substring(0, 4)+"m/s";

																
								$("#wimg").html(wimg);
								$("#wtmp").html(wtmp);
								$("#wwind").html(wwind);
								$("#wws").html(wws);


							},
							error:{}
						});
						setTimeout(function () {
							getWeather();
						}, 100000);
					}
					getWeather();
					});
					  </script>
              	<ul>
                	<li>
						<span class="wicon" id="wimg"><img src='../images/weather/Clear.png'></span>
						<span class="Temp" id="wtmp">7.0˚<em>C</em></span>
					</li>
                    <li>
						바람 <span id="wwind">남동</span>풍 <span class="block fw700 f18" id="wws">0.4m/s</span>
						<span class="block f12">출처: 기상청</span>
					</li>
                </ul>
              </div>