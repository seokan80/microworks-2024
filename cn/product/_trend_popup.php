<script type="text/javascript" src="/js/layer_popup.js"></script>

<script>
	google.charts.load('current', {packages: ['corechart', 'line']});
	google.charts.setOnLoadCallback(drawLineColors);
	$(window).resize(function(){ 
		drawLineColors(); 
	}); 
	function drawLineColors() {
		  var data = new google.visualization.DataTable();
		  data.addColumn('number', 'X');
		  data.addColumn('number', 'Y');

		  data.addRows([
			[0, 0],    [1, 10], [2, 50],  [3, 17],   [4, 18],  
			[5, 18] , [6, 18], [7, 18], [8, 18], [9, 18],
			[10, 18], [11, 18]
		  ]);

		  var options = {
			chartArea:{left:32, width:'93%'}, // 차트위치 및 크기
			//가로축
			hAxis: {
				title: 'x값',
				textStyle: {
					color: '#333',
					//fontSize: 20,
					italic: true
				},
				titleTextStyle: {
					color: '#ff7900',
					fontSize: 16,
				},
			},
			//세로축
			vAxis: {
			  title: 'y값',
				textStyle: {
					color: '#333',
					//fontSize: 20,
					italic: true
				  },
				  titleTextStyle: {
					color: '#ff7900',
					fontSize: 16,
				  }
			},
			legend: 'none', // 범례 
			colors: ['#ff7900'], //라인 색상
			pointSize : 5 // 라인 위 동그라미
		  };

		  var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
		  chart.draw(data, options);
		 
		}
</script>

<style>

</style>

<section class="footer-modal-content trend-popup">
	<a href="javascript:;" class="modal-close-btn" title="팝업 닫기"><i class="material-icons">&#xE14C;</i></a>
	<div class="footer-inner-box">
		<div class="footer-inner">
			<div class="clearfix">
				<div class="chart-con">
					<h4 class="chart-tit">3rd week of April, 2019</h4><!-- list페이지의 제목입니다.-->
					  <div id="chart_div"></div>
				</div>
				<div class="tit-box">
					<span class="tit01">DRAM</span><!-- view페이지의 제목입니다.  -->
					<span class="tit02">Mobile DDR</span> <!-- view페이지의 테이블의 제목입니다.  -->
					<p class="tit03">LPDDR3 512Mx32 1866</p>
				</div>
			</div>
		</div>
	</div>
</section>