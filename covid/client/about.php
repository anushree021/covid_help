<?php 
include("connection.php");
include("include/meta1.php");
include("include/header1.php");
?>

<style type="text/css">
* {
  box-sizing: border-box;
}
h1
{
	font-family:Lucida Handwriting;
	font-weight:bold;
	text-align:center;
	color:white;
}
.column {
  float: left;
  width: 25%;
  padding: 5px;
}
nav
{
	display:block;
	position:absolute;
	top:0;
	width:100%;

}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
body
{background-image: url("http://www.pngmagic.com/product_images/black-background-for-website-banner-low.jpg");
padding-top:65px;
		margin: 0;
	}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }
}
</style>

<h1>Meet Our Team</h1>
<div class="row">
  <div class="column">
    <img src="https://lh3.googleusercontent.com/asCO5lZEsJxso3tOvmv0qMbUUKcqgQ7dPko1DLxkcpgDsFCbfgbCXBls7W6kXHx6rw_dHbqt3GcBYUuFU5tUzJYoNMuq_d0ySw-t0fKWDCtnrTkRSzyb6-RpAh5cI7WKps2Mq4n9jVXtM3t6xaqDAeA0ZfOYOTK9B4J1Dfwr7fJy83htwHpbBNXGWAFmgbi-QmKvepmYLgSeBzYGE1UL5lPC7JPeGuxYmCXNEsPK-uW1nm0OAe7gijFS9_BBUT6XPUr80FV232-xeJ8ye7p3fI09syYBB2vWc9pmIzgFnSKaXGLMRROlSARpNeI7f3vqL6pyURvJvsd9VgUaUyEWFXVIzi_rGGrh47WWFr0bmrxrksAKPwGZkrC5EX-eFe_Ii3cB3a7wyCPj9vNswySe5UrswpH1s8DkOinFIk6PrXy6lO9rSIXR7_J27PIR30TmjIcOM5ljwllVOPWjqiAjU6qa0WQmqq8BG4dmD1Hqz5zvCgklC_dtfcoTNEFNrCKgKLFCMZRBst86J8_5nWr8fXcG97eBVl1Hh-NmBy1ppi86T56jDTfqDInbcr-iCtIpuGdceyIUkTYpEGy-5eMyzaz8PB-8U39Hn4ydJjyJuEeRHPbMBtI4Gs4sWmfVSxGaruH-ic-lgMWR0_j26qF6vGwSJIDhdVbWPXQgupuZOkjcsY0fx5ABB78U7dRtDi9WPvR3d2CbghklqFG6KyF8inEp=w1204-h903-no?authuser=0" alt="Snow" style="width:100%" height="400">
   <h1> Details of member 1
  </div>
  <div class="column">
    <img src="https://lh3.googleusercontent.com/SxHcZ-zXnBpLkN844zM1ZuohZIiAjY-laBQs8WhLcWgpaP8Nov7yx-Y0kGvZpl0HwqxTwnNW1VWBWHul1GEfL2zFNsBT7FywqpBkybaQSHUFAWsaR11qefw3drrU-F3eD47GhQVTcppawLZSzrArd-d5j4EKcyIawGAnHv3jB1b2BkStYBMHab3BU1TJnPonWQ0L1P9uCb3uB5Ta0g01RZ_jcX2eZJ5ivYwbu8_J3gG1gKeRhMhZReeiVRWMxTjk6X2gf7xStHNwxT2KrcHPd4Pu_h9VckflelyVSG0day3BfLj88RNw-KpPuMNj9BwJNMrQj3TQFVMr4oL7iG79MMnsKpsYf0OWbKAC5ottu5ZZtL8VlYCsaiDnjvrv6wG2Vezfj2njTAaTdqPjhR89vnED8yKtw3QQ660IG63uatcEvpMAPhAC3ZcW-bziE5oOi1EvAsfjrXMrc--AMh1VlyADX_P6QmCqWp8CXMzklDnaWrADfcjOUcCyZsIbF7NweuQIT793HuZREbRY1TvmDZm-0Ezx8P94UsZ-HQajK6wvBHXpnFeRT2b0BFUK41GtitDHWB6lMeNixb2lH8BUUhTe1V3CaTrdeuvfXL9YXDHWDziSXChyStcmr2zAUxA-p7i5nI1g7ILGhBm50ZGEcnKyfl1gw4SrnhIBp7PQbB_l7B-wMb5XWiqo38WQajRkyRcF6I40z0ht6lmPNV3RELTNIw=w509-h903-no?authuser=0" alt="Forest" style="width:100%" height="400">
   <h1> Member 2
  </div>
  <div class="column">
    <img src="https://lh3.googleusercontent.com/L7bNu6JzsjvVhuXoPY4sW-LB6J6ZKnbSaeYDGy4W-8cVi2MhM_2-QVInDnDQuPw-e8Nz9hFTj4CxKNef_26zVt71FsD7d3cggyO-CafGfqzKZZYFiQ0xskD4yPeWOt12mYNQwFg3AZTIfRcqOzPQXkbT8PhujS0yusD1nHfP3e0Pwcs6BfrSh6uNuD1VYD3RwyO1drhaYTA9kfLejsIQKPoOJAPeUBXvKBuQLRbWZjrs3YGF3n7oZWHKIZe6a-pqm7_NIf7wZtFK8DsPDPFRE2Cr85e1C7UcN3NPtBnEIT8ayreXD09rAaRzCns1zYkzLHEcutplRwXzi8T32tVas45hl4UfAP4OYzl-fAelC5O0cjLPRyR7Q0BvwJhfmUJCR19UiasfJnuUCIg8C9uD98xiEXfDNP8jdNh0ET-A8-2BhJN1bE47OnMfOhmJFAvHFdnltUeuIoEpXahcdBK3dBJ0As4LzZZ0nJKW6yh1Jp2Co9-2EVW-biw2GyeQWjMcXl5lGxvEdeCvGIuenuWPt06pU3YF_jJyp38Mq5lVhduEhJC7ZSLrLy9pwbzE3UqL37h751Q3eFGYruecNFPUAj1SwG8suE0fdgflhHNn4IG0UO43Dq1E2vtuDylrp8pdDfaKQ_lGgHns95_JoqRE1RhOl2AG5IoXnceAQDLcsTLWtkl5KsJKUq2UTf0obUvtm-NwN-XvQu4zJqt3qHlWpLCd=w509-h903-no?authuser=0" alt="Mountains" style="width:100%" height="400">
   <h1> member 3
  </div>
  <div class="column">
    <img src="https://lh3.googleusercontent.com/VA9phZmOyaGlIyPnS7D4GGaR2CNNqFpSPYbbxWDiLmM0BctBgIxMAYM4K-zIUuIaNoz6tA_1G2GZFIHZ_Xtm1oIjjGjORhAQ3gnsF4EQEw8kXZJ4wax7SKnOthylrVN4L-hvvSaFaTjIewqr9_NqL11hkgQnicsykxphwSxB9EYKxmQEniYev2bVRs6nAKsfbAOMffLNeEz-Mnjy1wPi-3KCQE_RPTDBDO1aM_LvUObYdZ1rDTJS9j1FkTF11fU4IddCCnauPWyjhqGeR3tzpAEkhrMnd-UamMYsrYXoECmcO-dqYOSvOYj32MX5pcz-aCpMmGpyP-fziFTBFlzXb5jmiOXoKDikbjgdhBQ7l0luyBfDvuDSqYNePWBpb95YxzMNFLFPgpf-nSZg1X1j7cJgjlYDYYsVSxloqLVlR6aBZP5SAgocIGNfl4JmCE_xWhO6aSxNgJdgZxCnNfO-8pzaxpQeB7VueiRyelnL8K9cp3q4lArOUy3_YejYr-hQVvwWFufkZy3rMGoVfWT2tMYV_nKBsmoe8DXJnwY9uapC5zJH7wLeqb9uWudiIpX6DqQK32lHB2LLBTBju2OEgizmZ79BpWUGFZQ3Y9nFWaqFVipakU6_m6H3km7Y4LKGXiDewttb4l8yi6ccL_9RE1LzIWUin-Uf0fpt9405ORd8rdlOdUouMcC5_ICH8GfMzKBcksgrJeZaredh4jgg5w2Q=w724-h720-no?authuser=0" alt="Mountains" style="width:100%">
   <h1> member 4
</div>

</div>


</body>
</html>
