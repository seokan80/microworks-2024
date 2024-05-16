<?
$page_num = "01";
$sub_num = "02";
$page_section = "company";
$sub_section = "ceo";
$page_info = "COMPANY";
$sub_info = "CEO Greeting";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
/* css */
</style>
<script>
/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
				<!-- 컨텐츠 내용 -->
				<!-- !NOTE S : 2024-04 추가 -->
				<article class="ceo-page">
					<div class="area">
						<div class="inner">
							<div class="greeting-wrap">
								<div class="ceo-img-con"><img src="/images/content/img-ceo.png" alt=""></div>
								<div class="ceo-txt-con">
									<div class="tit-box">
										<p class="tit-en">Shared growth</p>
										<p class="tit-kor">신뢰를 기반으로 <br><strong>동반성장</strong>해 나아갑니다.</p>
									</div>
									<div class="txt-box">
										<p class="txt">
											마이크로웍스 코리아(주)는 ‘사람이 답이다’라는 모토 아래 구성원과 성장을 함께 하는<br class="pc-only"/>
											사람 중심의 회사입니다. 신뢰할 수 있는 기업을 목표로 2007년 창사 이래<br class="pc-only"/>
											반도체 유통 시장을 개척, 선도하며 한 길만 걸어왔습니다.<br/>
											디지털 기기 제조 산업부터 항공우주 방위산업까지 반도체, 메모리, 전자부품을 공급하며<br class="pc-only"/>
											국가 경제발전에 기여해나가겠습니다.<br/>
											<br/>
											마이크로웍스 코리아(주)는 지속적인 혁신과 도전으로 국내를 넘어 글로벌 리딩 반도체 전문 유통기업으로 도약하겠습니다.<br/>
											<br/>
											AI를 활용한 거래방식 혁신으로 ‘Trade to Upgrade’라는 비전을 달성하고 <br class="pc-only"/>
											인재 양성과 사회적 책임을 다하는 투명경영으로<br class="pc-only"/>
											고객에게 사랑받고 사회적으로 존경받는 기업이 되기 위해 노력하겠습니다.<br/>
											<br/>
											감사합니다.
										</p>
									</div>
									<div class="sign-box">
										<p class="sign-txt">마이크로웍스코리아㈜ <strong>대표이사 안 철</strong></p>
									</div>
								</div>
							</div>
							<ul class="company-info">
								<li>
									<img src="/images/content/img-company-info-01.png" alt="">
									<div class="text-wrap">
										<p class="title">정품 공급</p>
										<p class="desc">다양한 제조사 및 유통사의 글로벌 공급망을 통해 품질이 확인된 여러 제품을 한 곳에서 구매하여 <br class="pc-only"/>고객의 시간과 비용을 절약하고 있습니다.</p>
									</div>
								</li>
								<li>
									<img src="/images/content/img-company-info-02.png" alt="">
									<div class="text-wrap">
										<p class="title">기술 지원</p>
										<p class="desc">기술적 지원을 제공하여 고객이 제품을 올바르게 선정, 사용할 수 있도록 돕고 있습니다. <br class="pc-only">고객의 제품 설계, 개발 및 제조 단계에서 발생할 수 있는 문제를 해결하고 최적의 솔루션을 제공하고 있습니다.</p>
									</div>
								</li>
								<li>
									<img src="/images/content/img-company-info-03.png" alt="">
									<div class="text-wrap">
										<p class="title">정보 제공</p>
										<p class="desc">시장 동향 및 제품 정보를 고객에게 제공하여 고객이 최신 기술과 시장 동향을 파악하여 <br class="pc-only">더 나은 결정을 할 수 있도록 돕고 있습니다.</p>
									</div>
								</li>
								<li>
									<img src="/images/content/img-company-info-04.png" alt="">
									<div class="text-wrap">
										<p class="title">공급망 관리</p>
										<p class="desc">제품의 안전한 운송 및 배송을 보장하고 재고를 효율적으로 관리하여 <br class="pc-only">고객에게 신속한 서비스를 제공하고 있습니다.</p>
									</div>
								</li>
								<li>
									<img src="/images/content/img-company-info-05.png" alt="">
									<div class="text-wrap">
										<p class="title">ESG 경영</p>
										<p class="desc">환경을 생각하는 친환경 포장재 사용부터 구성원의 성장과 함께 <br class="pc-only">사회공헌 및 봉사활동, 정도경영으로 ESG 경영을 실천하고 있습니다.</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- !NOTE E : 2024-04 추가 -->
				</article>
				<!-- //컨텐츠 내용 -->
		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
