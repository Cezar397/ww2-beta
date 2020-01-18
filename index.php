<?php
$file = 'ip.txt';
$open = file_get_contents('ip.txt');
$txt = $_SERVER["REMOTE_ADDR"];
$open .= $txt.' - '."\n";
file_put_contents($file, $open);
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- BOOTSTRAP CSS-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<!-- END BOOTSTRAP CSS -->
		<link rel="stylesheet" type="text/css" href="public/css/style.css">
		<!-- META TAGS -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- END META TAGS -->
		<title>Al Doilea Razboi Mondial</title>
	</head>
	<body>
		<!-- NAVBAR -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-ww2" id="navBar">
			<a class="navbar-brand" href="" title="Acasă"><img class="navbar-brand-logo" src="public/img/svastica.png" width="30px" height="30px"></a>
			
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" href="#">Acasă</a>
					</li>
					<li class="nav-item">
						<li class="nav-item">
							<a class="nav-link" href="#tari">Tari</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#photos">Poze</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#statistici">Statistici</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#victime">Victime</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#tehno">Tehnologii</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#urmari">Urmări</a>
						</li>
						<!--
						<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">Mai multe</a>
								<div class="dropdown-menu">
										<a class="dropdown-item" href="">Rezumat</a>
										<a class="dropdown-item" href="">Istorie</a>
										<a class="dropdown-item" href="">Victime</a>
										<a class="dropdown-item" href="">Cronologie</a>
										<a class="dropdown-item" href="">Fapte</a>
										<a class="dropdown-item" href="">Batalii</a>
										<a class="dropdown-item" href="">Cifre</a>
										<a class="dropdown-item" href="">Citate</a>
										<a class="dropdown-item" href="">Poezii</a>
										<a class="dropdown-item" href="">Postere</a>
										<a class="dropdown-item" href="">Propaganda</a>
										<a class="dropdown-item" href="">Steaguri</a>
										<a class="dropdown-item" href="">Avioane</a>
										<a class="dropdown-item" href="">Arme</a>
										<a class="dropdown-item" href="">Submarine</a>
										<a class="dropdown-item" href="">Vase de razboi</a>
										<a class="dropdown-item" href="">Tehnologie</a>
										<a class="dropdown-item" href="">Holocaust</a>
										<a class="dropdown-item" href="">Bomba Atomica</a>
										<a class="dropdown-item" href="">Memorial</a>
								</div>
						</li>-->
					</ul>
				</div>
			</nav>
			<!-- END NAVBAR -->
			<button id="topBtn" onclick="toTop()"><span><img width="32px" height="32px" src="public/img/icons/up-arrow.svg"></span></button>
			<!-- CONTENT -->
			<div class="container">
				<!-- HOME -->
				<div id="home">
					<br><br><br>
					<h3>Al Doilea Razboi Mondial</h3>
					<br>
					<p class="lead">The origins of the Second World War are generally viewed as being traced back to the First World War (1914-1918). In that war Germany under the ultra-nationalistic Kaiser Wilhelm II along with its allies, had been defeated by a combination of the United Kingdom, United States, France, Russia and others.</p>
					<img class="rounded float-right" src="public/img/pic_hitler.jpg" oncontextmenu="return false">
					
					<p class="lead">The war was directly blamed by the victors on the miltant nationalism of the Kaiser's Germany; it was Germany that effectively started the war with an attack on France through Belgium.</p>
					<p class="lead">France, which had suffered a previous defeat at the hands of Prussia (a state that merged one year later with others to form Germany) in the Franco-Prussian War in 1870, demanded revenge for its financial devastation during the First World War (and its humiliation in the earlier war) ensured that the various peace treaties, specifically the Treaty of Versailles imposed tough financial reparations and restrictions on Germany.</p>
					<br><br><br>
					<h3>A New Republic</h3>
					<br>
					<p class="lead">A new democratic German republic, known as the Weimar Republic, came into being. After some success it was hit by hyperinflation and other serious economic problems.</p>
					<p class="lead">Right wing nationalist elements under a variety of movements, but most notably the Nazi Party of Adolf Hitler, sought to blame Germany's "humiliating" status on the harshness of the post-war settlement, on the weakness of democratic government, and on the Jews, whom it claimed possessed a financial stranglehold on Germany.</p>
					<p class="lead">Hitler was appointed Reichskanzler (Chancellor) on January 30, 1933, by the aged President von Hindenburg.</p>
					<p class="lead">Hitler's government exercised much of its power through the special emergency powers possessed by the President under the constitution.</p>
				</div>
				<!-- END HOME -->
				<!-- TARI -->
				<div id="tari">
					<br><br>
					<hr>
					<br><br>
					
					
					<h3 align="center">Tarile in al Doilea Razboi Mondial</h3>
					<br><br>
					<h4>Axis Powers (signers of the Tripartite Treaty)</h4>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><span class="lead">Germany</span></li>
						<li class="list-group-item"><span class="lead">Italy</span></li>
						<li class="list-group-item"><span class="lead">Japan</span></li>
					</ul>
					<br><br>
					<h4>Co-signers of the Tripartite Treaty</h4>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><span class="lead">Bulgaria (March 1st, 1941)</span></li>
						<li class="list-group-item"><span class="lead">Hungary (November 20th, 1940)</span></li>
						<li class="list-group-item"><span class="lead">Romania (November 23rd, 1940)</span></li>
						<li class="list-group-item"><span class="lead">Slovakia(1) (November 24th, 1940)</span></li>
					</ul>
					<br><br>
					<h4>Countries that were annexed by, or at war with, Axis Powers before the World War II
					</h4>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><span class="lead">Austria (annexed to Germany, "Anschluss", March 13th, 1938)</span></li>
						<li class="list-group-item"><span class="lead">Ethiopia (annexed by Italy in 1936, after the Abyssinia crisis, independence restored in 1941)</span></li>
						<li class="list-group-item"><span class="lead">Republic of China (at war with Japan since 1931)</span></li>
					</ul>
					<br><br>
					<h4>Allied Powers</h4>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><span class="lead">Australia</span></li>
						<li class="list-group-item"><span class="lead">Canada</span></li>
						<li class="list-group-item"><span class="lead">Newfoundland</span></li>
						<li class="list-group-item"><span class="lead">Republic of China (at war with Japan since 1931)</span></li>
						<li class="list-group-item"><span class="lead">New Zealand</span></li>
						<li class="list-group-item"><span class="lead">South Africa</span></li>
						<li class="list-group-item"><span class="lead">Soviet Union (from June 1941)</span></li>
						<li class="list-group-item"><span class="lead">United Kingdom</span></li>
						<li class="list-group-item"><span class="lead">United States (from December 1941)</span></li>
					</ul>
					<br><br>
					<h4>Supporters of the Allies</h4>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><span class="lead">Argentina</span></li>
						<li class="list-group-item"><span class="lead">Bolivia</span></li>
						<li class="list-group-item"><span class="lead">Chile</span></li>
						<li class="list-group-item"><span class="lead">Colombia</span></li>
						<li class="list-group-item"><span class="lead">Costa Rica</span></li>
						<li class="list-group-item"><span class="lead">South Africa</span></li>
						<li class="list-group-item"><span class="lead">Cuba</span></li>
						<li class="list-group-item"><span class="lead">Dominican Republic</span></li>
						<li class="list-group-item"><span class="lead">Ecuador</span></li>
						<li class="list-group-item"><span class="lead">Egypt(2)</span></li>
						<li class="list-group-item"><span class="lead">El Salvador</span></li>
						<li class="list-group-item"><span class="lead">Guatemala</span></li>
						<li class="list-group-item"><span class="lead">United States (from December 1941)</span></li>
						<li class="list-group-item"><span class="lead">Haiti</span></li>
						<li class="list-group-item"><span class="lead">Honduras</span></li>
						<li class="list-group-item"><span class="lead">Iraq</span></li>
						<li class="list-group-item"><span class="lead">Lebanon</span></li>
						<li class="list-group-item"><span class="lead">Liberia</span></li>
						<li class="list-group-item"><span class="lead">Mexico</span></li>
						<li class="list-group-item"><span class="lead">Mongolia</span></li>
						<li class="list-group-item"><span class="lead">Nicaragua</span></li>
						<li class="list-group-item"><span class="lead">Panama</span></li>
						<li class="list-group-item"><span class="lead">Paraguay</span></li>
						<li class="list-group-item"><span class="lead">Peru</span></li>
						<li class="list-group-item"><span class="lead">Saudi Arabia</span></li>
						<li class="list-group-item"><span class="lead">Turkey</span></li>
						<li class="list-group-item"><span class="lead">Uruguay</span></li>
						<li class="list-group-item"><span class="lead">Venezuela</span></li>
					</ul>
					<br><br>
					<h4>Countries that were attacked, occupied, or switched sides during the war (Most countries below had declared their neutrality before being assaulted.)</h4>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><span class="lead">Algeria</span></li>
						<li class="list-group-item"><span class="lead">Albania (occupied by Italy April 7th 1939, by Germany September 26th 1943)</span></li>
						<li class="list-group-item"><span class="lead">Belgium (invaded by Germany May 10th 1940)</span></li>
						<li class="list-group-item"><span class="lead">Burma</span></li>
						<li class="list-group-item"><span class="lead">Czechoslovakia(1) (Bohemia and Moravia occupied by Germany March 15th 1939)</span></li>
						<li class="list-group-item"><span class="lead">Denmark (occupied by Germany April 9th 1940, Greenland occupied by USA April 9th 1941)</span></li>
						<li class="list-group-item"><span class="lead">Estonia (occupied by the Soviet Union from June 18th 1940, by Germany September 5th 1941, re-annexed by the Soviet Union in 1944)</span></li>
						<li class="list-group-item"><span class="lead">Finland (attacked by the Soviet Union November 30th 1939 and June 26th 1941)</span></li>
						<li class="list-group-item"><span class="lead">France (surrendered to Germany June 22nd 1940)</span></li>
						<li class="list-group-item"><span class="lead">Greece (invaded by Italy October 28th 1940, German occupation from April 6th 1941)</span></li>
						<li class="list-group-item"><span class="lead">Iceland (occupied by Great Britain May 10th 1940, by USA from July 1941)</span></li>
						<li class="list-group-item"><span class="lead">India</span></li>
						<li class="list-group-item"><span class="lead">Iran</span></li>
						<li class="list-group-item"><span class="lead">Latvia (occupied by the Soviet Union from June 18th 1940, by Germany June 25th 1941, re-annexed by the Soviet Union in 1944)</span></li>
						<li class="list-group-item"><span class="lead">Lithuania (occupied by the Soviet Union from June 18th 1940, by Germany June 22nd 1941, re-annexed by the Soviet Union in 1944)</span></li>
						<li class="list-group-item"><span class="lead">Luxembourg (invaded by Germany May 10th 1940)</span></li>
						<li class="list-group-item"><span class="lead">Morocco</span></li>
						<li class="list-group-item"><span class="lead">The Netherlands (invaded by Germany May 10th 1940)</span></li>
						<li class="list-group-item"><span class="lead">New Guinea</span></li>
						<li class="list-group-item"><span class="lead">Norway (invaded by Germany April 9th 1940)</span></li>
						<li class="list-group-item"><span class="lead">Philippines</span></li>
						<li class="list-group-item"><span class="lead">Poland (invaded by Germany and the Soviet Union in September 1939)</span></li>
						<li class="list-group-item"><span class="lead">Singapore</span></li>
						<li class="list-group-item"><span class="lead">Syria</span></li>
						<li class="list-group-item"><span class="lead">Thailand</span></li>
						<li class="list-group-item"><span class="lead">Tunisia (Occupied by USA in 1943)</span></li>
						<li class="list-group-item"><span class="lead">Yugoslavia(3) (German occupation from April 6th 1941)</span></li>
					</ul>
					<br><br>
					<h4>Countries that remained nominally neutral</h4>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><span class="lead">Ireland</span></li>
						<li class="list-group-item"><span class="lead">Portugal</span></li>
						<li class="list-group-item"><span class="lead">Spain</span></li>
						<li class="list-group-item"><span class="lead">Sweden (with exception for the Winter War)</span></li>
						<li class="list-group-item"><span class="lead">Switzerland</span></li>
					</ul>
				</div>
				<!-- END TARI -->
				<div id="photos">
					<br>
					<hr>
					<br><br>
					<!-- POZE WW2 -->
					
					<h3 align="center">Imagini reprezentative</h3>
					<br><br><br>
					<figure class="figure">
						<img class="figure-img img-fluid" src="public/img/img_rep/picts_hitler.jpg">
						<figcaption class="figure-caption">Adolf Hitler</figcaption>
					</figure>
					<br><br>
					<figure class="figure">
						<img class="figure-img img-fluid" src="public/img/img_rep/picts_dresden.jpg">
						<figcaption class="figure-caption">Dresden after Allied bombing. Allied bombing of the German city of Dresden later in the war proved controversial. 85% of the baroque city was destroyed.</figcaption>
					</figure>
					<br><br>
					<figure class="figure">
						<img class="figure-img img-fluid" src="public/img/img_rep/picts_bigthree.jpg">
						<figcaption class="figure-caption">The Big Three: The Allied Leaders: Prime Minster Winston Churchill (UK), President Franklin Delano Roosevelt (US), and First Secretary Joseph Stalin (USSR)</figcaption>
					</figure>
					<br><br>
					<figure class="figure">
						<img class="figure-img img-fluid" src="public/img/img_rep/picts_benito.jpg">
						<figcaption class="figure-caption">Benito Mussolini Italy's 'Duce' Founder of Italian fascism.</figcaption>
					</figure>
					<br><br>
					<figure class="figure">
						<img class="figure-img img-fluid" src="public/img/img_rep/picts_gaulle.jpg">
						<figcaption class="figure-caption">General Charles de Gaulle Leader of the Free French in opposition to Pet�in's Vichy regime.</figcaption>
					</figure>
					<br>
					<figure class="figure">
						<img class="figure-img img-fluid" src="public/img/img_rep/picts_holo.jpg">
						<figcaption class="figure-caption">Thousands of Holocaust victims arriving at the Nazi extermination camp at Birkenau in 1944</figcaption>
					</figure>
					<br><br>
					<figure class="figure">
						<img class="figure-img img-fluid" src="public/img/img_rep/picts_soviet.jpg">
						<figcaption class="figure-caption">Soviet soldiers raise their flag over the Reichstag in Berlin in 1945</figcaption>
					</figure>
					<br><br>
					<figure class="figure">
						<img class="figure-img img-fluid" src="public/img/img_rep/picts_hiro.jpg">
						<figcaption class="figure-caption">Japan's Emperor Hirohito</figcaption>
					</figure>
					<br>
					<figure class="figure">
						<img class="figure-img img-fluid" src="public/img/img_rep/picts_naga.jpg">
						<figcaption class="figure-caption">A mushroom cloud from the nuclear explosion over Nagasaki rising 60,000 feet into the air on the morning of August 9th, 1945</figcaption>
					</figure>
				</div>
				<!-- END POZE WW2 -->
				<br><br>
				<hr>
				<br><br>
				<!-- STATISTICI -->
				<div id="statistici">
					<h3 align="center">Statistici</h3>
					<br><br><br>
					<h2 class="lead">World War 2 Death Count Per Country</h2>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Tara</th>
									<th>Militari</th>
									<th>Civili</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>USSR</td>
									<td>12 million</td>
									<td>17 million</td>
									<td>29 million</td>
								</tr>
								<tr>
									<td>Poland</td>
									<td>597,000</td>
									<td>5.86 million</td>
									<td>6.27 million</td>
								</tr>
								<tr>
									<td>Germany</td>
									<td>3.25 million</td>
									<td>2.44 million</td>
									<td>5.69 million</td>
								</tr>
								<tr>
									<td>Yugoslavia</td>
									<td>305,000</td>
									<td>1.35 million</td>
									<td>1.66 million</td>
								</tr>
								<tr>
									<td>Romania</td>
									<td>450,000</td>
									<td>465,000</td>
									<td>915,000</td>
								</tr>
								<tr>
									<td>Hungary</td>
									<td>200,000</td>
									<td>600,000</td>
									<td>800,000</td>
								</tr>
								<tr>
									<td>France</td>
									<td>245,000</td>
									<td>350,000</td>
									<td>595,000</td>
								</tr>
								<tr>
									<td>Italy</td>
									<td>380,000</td>
									<td>153,000</td>
									<td>533,000</td>
								</tr>
								<tr>
									<td>Great Britain</td>
									<td>403,000</td>
									<td>92,700</td>
									<td>495,000</td>
								</tr>
								<tr>
									<td>United States</td>
									<td>407,000</td>
									<td>6,000</td>
									<td>413,000</td>
								</tr>
								<tr>
									<td>Czechoslovakia</td>
									<td>7,000</td>
									<td>315,000</td>
									<td>322,000</td>
								</tr>
								<tr>
									<td>Holland</td>
									<td>13,700</td>
									<td>236,000</td>
									<td>249,000</td>
								</tr>
								<tr>
									<td>Greece</td>
									<td>19,000</td>
									<td>140,000</td>
									<td>159,000</td>
								</tr>
								<tr>
									<td>Belgium</td>
									<td>76,000</td>
									<td>23,000</td>
									<td>99,000</td>
								</tr>
							</tbody>
							
						</table>
					</div>
					<br><br><br><br>
					<h2 class="lead">Death Distribution Of Both World Wars</h2>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>War</th>
									<th>Military Dead</th>
									<th>Civilian Dead</th>
								</thead>
								<tbody>
									<tr>
										<td>World War 1</td>
										<td>95%</td>
										<td>5%</td>
									</tr>
									<tr>
										<td>World War 2</td>
										<td>33%</td>
										<td>67%</td>
									</tr>
								</tbody>
							</table>
						</div>
						<br><br><br><br>
						<h2 class="lead">Number of divisions available for these countries over the course of the war</h2>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Country</th>
										<th>1939</th>
										<th>1940</th>
										<th>1941</th>
										<th>1942</th>
										<th>1943</th>
										<th>1944</th>
										<th>1945</th>
										<th>End of War</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>France</td>
										<td>86</td>
										<td>105</td>
										<td>0</td>
										<td>0</td>
										<td>5</td>
										<td>7</td>
										<td>14</td>
										<td>14</td>
									</tr>
									<tr>
										<td>Germany</td>
										<td>78</td>
										<td>189</td>
										<td>235</td>
										<td>261</td>
										<td>327</td>
										<td>347</td>
										<td>319</td>
										<td>375</td>
									</tr>
									<tr>
										<td>Great Britain</td>
										<td>9</td>
										<td>34</td>
										<td>35</td>
										<td>38</td>
										<td>39</td>
										<td>37</td>
										<td>31</td>
										<td>31</td>
									</tr>
									<tr>
										<td>Italy</td>
										<td>6</td>
										<td>73</td>
										<td>64</td>
										<td>89</td>
										<td>86</td>
										<td>2</td>
										<td>9</td>
										<td>10</td>
									</tr>
									<tr>
										<td>Poland</td>
										<td>43</td>
										<td>2</td>
										<td>2</td>
										<td>2</td>
										<td>2</td>
										<td>5</td>
										<td>5</td>
										<td>5</td>
									</tr>
									<tr>
										<td>Romania</td>
										<td>11</td>
										<td>28</td>
										<td>33</td>
										<td>31</td>
										<td>33</td>
										<td>32</td>
										<td>24</td>
										<td>24</td>
									</tr>
									<tr>
										<td>USSR</td>
										<td>194</td>
										<td>200</td>
										<td>220</td>
										<td>250</td>
										<td>350</td>
										<td>400</td>
										<td>488</td>
										<td>491</td>
									</tr>
									<tr>
										<td>USA</td>
										<td>8</td>
										<td>24</td>
										<td>39</td>
										<td>76</td>
										<td>95</td>
										<td>94</td>
										<td>94</td>
										<td>94</td>
									</tr>
								</tbody>
							</table>
						</div>
						<br><br><br><br>
						<h2 class="lead">Aircraft Available In Europe</h2>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Date</th>
										<th>British</th>
										<th>US</th>
										<th>Soviet</th>
										<th>TOTAL</th>
										<th>German</th>
										<th>Allied Ratio</th>
									</tr>
								</thead>
								<tr>
									<td>June 1942</td>
									<td>9500</td>
									<td>0</td>
									<td>2100</td>
									<td>11,600</td>
									<td>3700</td>
									<td>3.1<b>:</b>1</td>
								</tr>
								<tr>
									<td>December 1942</td>
									<td>11,300</td>
									<td>1300</td>
									<td>3800</td>
									<td>16,400</td>
									<td>3400</td>
									<td>4.8<b>:</b>1</td>
								</tr>
								<tr>
									<td>June 1943</td>
									<td>12,700</td>
									<td>5000</td>
									<td>5600</td>
									<td>23,300</td>
									<td>4600</td>
									<td>5.1<b>:</b>1</td>
								</tr>
								<tr>
									<td>December 1943</td>
									<td>11,800</td>
									<td>7500</td>
									<td>8800</td>
									<td>28,100</td>
									<td>4700</td>
									<td>6<b>:</b>1</td>
								</tr>
								<tr>
									<td>June 1944</td>
									<td>13,200</td>
									<td>11,800</td>
									<td>14,700</td>
									<td>39,700</td>
									<td>4600</td>
									<td>8.6<b>:</b>1</td>
								</tr>
								<tr>
									<td>December 1944</td>
									<td>14,500</td>
									<td>12,200</td>
									<td>15,800</td>
									<td>42,500</td>
									<td>8500</td>
									<td>5<b>:</b>1</td>
								</tr>
							</table>
						</div>
						<br><br><br><br>
						<h2 class="lead">Aircraft Sorties In World War 2</h2>
						<div class="table-responsive">
							<table class="table table-striped">
								<tr>
									<th>Campaign</th>
									<th>Allied</th>
									<th>Axis</th>
									<th>Allied Kills Per 1000</th>
									<th>Axis Kills Per 1000</th>
									<th>Allied Lost Per 1000</th>
									<th>Axis Lost Per 1000</th>
								</tr>
								<tr>
									<td>France 1940</td>
									<td>4480</td>
									<td>21,000</td>
									<td>28.6</td>
									<td>12.5</td>
									<td>58.5</td>
									<td>6.1</td>
								</tr>
								<tr>
									<td>Britain 1940</td>
									<td>31,000</td>
									<td>42,000</td>
									<td>21.8</td>
									<td>29.5</td>
									<td>29.5</td>
									<td>9.6</td>
								</tr>
								<tr>
									<td>Pre D-Day 1944</td>
									<td>98,400</td>
									<td>34,500</td>
									<td>12.7</td>
									<td>29.3</td>
									<td>10.3</td>
									<td>36.1</td>
								</tr>
								<tr>
									<td>Post D-Day 1944</td>
									<td>203,357</td>
									<td>31,833</td>
									<td>17.3</td>
									<td>16.2</td>
									<td>2.5</td>
									<td>110.6</td>
								</tr>
							</table>
						</div>
						<br><br><br><br>
						<h2 class="lead">Major Warships Sunk In World War 2</h2>
						<div class="table-responsive">
							<table class="table table-striped">
								<tr>
									<th >Country</th>
									<th >Aircraft Carriers</th>
									<th >Battleships</th>
									<th >Cruisers</th>
									<th >Destroyers</th>
									<th >Submarines</th>
									<th >Total</th>
								</tr>
								<tr>
									<td >Germany</td>
									<td >0</td>
									<td >4</td>
									<td >9</td>
									<td >53</td>
									<td >994</td>
									<td >1060</td>
								</tr>
								<tr>
									<td>Britain</td>
									<td>9</td>
									<td>5</td>
									<td>29</td>
									<td>142</td>
									<td>75</td>
									<td>260</td>
								</tr>
								<tr>
									<td>Italy</td>
									<td>0</td>
									<td>2</td>
									<td>15</td>
									<td>99</td>
									<td>116</td>
									<td>232</td>
								</tr>
								<tr>
									<td>USA</td>
									<td>11</td>
									<td>2</td>
									<td>10</td>
									<td>82</td>
									<td>52</td>
									<td>157</td>
								</tr>
								<tr>
									<td>France</td>
									<td>0</td>
									<td>5</td>
									<td>10</td>
									<td>58</td>
									<td>65</td>
									<td>138</td>
								</tr>
								<tr>
									<td>USSR</td>
									<td>0</td>
									<td>0</td>
									<td>2</td>
									<td>34</td>
									<td>95</td>
									<td>131</td>
								</tr>
								<tr>
									<td>Holland</td>
									<td>0</td>
									<td>0</td>
									<td>3</td>
									<td>11</td>
									<td>15</td>
									<td>29</td>
								</tr>
								<tr>
									<td>Poland</td>
									<td>0</td>
									<td>0</td>
									<td>1</td>
									<td>4</td>
									<td>2</td>
									<td>9</td>
								</tr>
							</table>
						</div>
						<br><br><br><br>
						<h2 class="lead">Civilian Air Raid Deaths</h2>
						<div class="table-responsive">
							<table class="table table-striped">
								<tr>
									<th>Country</th>
									<th>Deaths</th>
								</tr>
								<tr><td>Germany</td>
								<td>543,000</td>
							</tr>
							<tr><td>Britain</td>
							<td>60,400</td>
						</tr>
					</table>
				</div>
				<br><br><br><br>
				<h2 class="lead">German/American Rank Conversion Chart</h2>
				<div class="table-responsive">
					<table class="table table-striped">
						<tr>
							<th><i>Waffen SS</i></th>
							<th><i>Wehrmacht</i></th>
							<th>US Army</th>
						</tr>
						<tr><td>Schutze</td>
						<td>Schutze/Grenadier</td>
						<td>Private</td>
					</tr>
					<tr>
						<td>Oberschutze</td>
						<td>Oberschutze/Obergrenadier</td>
						<td>Private First Class</td>
					</tr>
					<tr>
						<td>Sturmann</td>
						<td>Gefreiter</td>
						<td>--</td>
					</tr>
					<tr>
						<td>Rottenfuhrer</td>
						<td>Obergefreiter</td>
						<td>Corporal</td>
					</tr>
					<tr>
						<td>Unterscharfuhrer</td>
						<td>Unteroffizier</td>
						<td>Sergeant</td>
					</tr>
					<tr>
						<td>Scharfuhrer</td>
						<td>Unterfeldwebel</td>
						<td>Staff Sergeant</td>
					</tr>
					<tr>
						<td>Standartenjunker</td>
						<td>Fähnrich</td>
						<td>--</td>
					</tr>
					<tr>
						<td>Oberscharfuhrer</td>
						<td>Feldwebel</td>
						<td>Technical Sergeant</td>
					</tr>
					<tr>
						<td>Hauptscharfuhrer</td>
						<td>Oberfeldwebel</td>
						<td>Master Sergeant</td>
					</tr>
					<tr>
						<td>Standarten-Oberjunker</td>
						<td>Oberfähnrich</td>
						<td>--</td>
					</tr>
					<tr>
						<td>Sturmscharfuhrer</td>
						<td>Stabsfeldwebel</td>
						<td>Sergeant Major</td>
					</tr>
					<tr>
						<td>Untersturmfuhrer</td>
						<td>Leutnant</td>
						<td>Second Lieutenant</td>
					</tr>
					<tr>
						<td>Obersturmfuhrer</td>
						<td>Oberleutnant</td>
						<td>First Lieutenant</td>
					</tr>
					<tr>
						<td>Hauptsturmfuhrer</td>
						<td>Hauptmann</td>
						<td>Captain</td>
					</tr>
					<tr>
						<td>Sturmbannfuhrer</td>
						<td>Major</td>
						<td>Major</td>
					</tr>
					<tr>
						<td>Obersturmbannfuhrer</td>
						<td>Oberstleutnant</td>
						<td>Lieutenant Colonel</td>
					</tr>
					<tr>
						<td>Standartenfuhrer</td>
						<td>Oberst</td>
						<td>Colonel</td>
					</tr>
					<tr>
						<td>Oberfuhrer</td>
						<td>--</td>
						<td>--</td>
					</tr>
					<tr>
						<td>Brigadefuhrer</td>
						<td>Generalmajor</td>
					<t>Brigadier General</td>
				</tr>
				<tr>
					<td>Gruppenfuhrer</td>
					<td>Generalleutnant</td>
					<td>Major General</td>
				</tr>
				<tr>
					<td>Obergruppenfuhrer</td>
					<td>General der... (Infanterie, etc.)</td>
					<td>Lieutenant General</td>
				</tr>
				<tr>
					<td>Oberstgruppenfuhrer</td>
					<td>Generaloberst</td>
					<td>General</td>
				</tr>
				<tr>
					<td>Reichsfuhrer</td>
					<td>Generalfeldmarschall</td>
					<td>General of the Army</td>
				</tr>
			</table>
		</div>
		<br><br><br><br>
		<h2 class="lead">German Occupational Forces, 1939-1940</h2>
		<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th>Country</th>
					<th>Population</th>
					<th>Area In Sq. Mi.</th>
					<th>German Forces</th>
					<th>German Ratio To Population</th>
				</tr>
				<tr>
					<td>Balkans</td>
					<td>21 million</td>
					<td>403,000</td>
					<td>200,000</td>
					<td>1<b>:</b>105</td>
				</tr>
				<tr>
					<td>Belgium</td>
					<td>8 million</td>
					<td>30,400</td>
					<td>100,000</td>
					<td>1<b>:</b>80</td>
				</tr>
				<tr>
					<td>Denmark</td>
					<td>3.6 million</td>
					<td>22,700</td>
					<td>40,000</td>
					<td>1<b>:</b>90</td>
				</tr>
				<tr>
					<td>France</td>
					<td>40 million</td>
					<td>550,700</td>
					<td>500,000</td>
					<td>1<b>:</b>80</td>
				</tr>
				<tr>
					<td>Holland</td>
					<td>8.5 million</td>
					<td>34,200</td>
					<td>100,000</td>
					<td>1<b>:</b>85</td>
				</tr>
				<tr>
					<td>Norway</td>
					<td>2.8 million</td>
					<td>324,000</td>
					<td>150,000</td>
					<td>1<b>:</b>19</td>
				</tr>
			</table>
		</div>
		<br><br><br><br>
		<h2 class="lead">Location Of German Divisions In June Of Each Year</h2>
		<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th>Country</th>
					<th>1941</th>
					<th>1942</th>
					<th>1943</th>
					<th>1944</th>
				</tr>
				<tr>
					<td>USSR</td>
					<td>34</td>
					<td>171</td>
					<td>179</td>
					<td>157</td>
				</tr>
				<tr>
					<td>France, Belgium & Holland</td>
					<td>38</td>
					<td>27</td>
					<td>42</td>
					<td>56</td>
				</tr>
				<tr>
					<td>Norway & Finland</td>
					<td>13</td>
					<td>16</td>
					<td>16</td>
					<td>16</td>
				</tr>
				<tr>
					<td>Balkans</td>
					<td>7</td>
					<td>8</td>
					<td>17</td>
					<td>20</td>
				</tr>
				<tr>
					<td>Italy</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					<td>22</td>
				</tr>
				<tr>
					<td>Denmark</td>
					<td>1</td>
					<td>1</td>
					<td>2</td>
					<td>3</td>
				</tr>
				<tr>
					<td>North Africa</td>
					<td>2</td>
					<td>3</td>
					<td>0</td>
					<td>0</td>
				</tr>
			</table>
		</div>
		<br><br><br><br>
		<h2 class="lead">A look at fuel consumption of German tanks</h2>
		<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th>Year</th>
					<th>Types Of Tanks In A Division</th>
					<th>Tons Of Fuel Consumed Per 100 Miles</th>
				</tr>
				<tr>
					<td>1941</td>
					<td>PzII, PzIII, PzIV, Pz38</td>
					<td>22.1</td>
				</tr>
				<tr>
					<td>1942</td>
					<td>PzIII, PzIV</td>
					<td>23.7</td>
				</tr>
				<tr>
					<td>1943</td>
					<td>PzIII, PzIV, Panther, Tiger</td>
					<td>31.7</td>
				</tr>
				<tr>
					<td>1944</td>
					<td> PzIV, Panther, Tiger</td>
					<td>35.8</td>
				</tr>
			</table>
		</div>
		<br><br><br><br>
		<h2 class="lead">Luftwaffe Aircraft Used Only Against Allied Bombers</h2>
		<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th>Month</th>
					<th>Year</th><th>Percentage</th>
				</tr>
				<tr>
					<td>June</td>
					<td>1940</td>
					<td>0%</td>
				</tr>
				<tr>
					<td>June</td>
					<td>1941</td>
					<td>7%</td>
				</tr>
				<tr>
					<td>June</td>
					<td>1942</td>
					<td>17%</td>
				</tr>
				<tr><td>June</td>
				<td>1943</td>
			<td>21%</tr>
		</td>
		<tr>
			<td>June</td>
			<td>1944</td>
			<td>29%</td>
		</tr>
		<tr>
			<td>January</td>
			<td>1945</td>
			<td>50%</td>
		</tr>
	</table>
</div>
<br><br><br><br>
<h2 class="lead">Oil Production In Tons</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th>Year</th><th>Germany</th>
			<th>USA</th>
		</tr>
		<tr>
			<td>1939</td>
			<td>8 million</td>
			<td>N/A</td>
		</tr>
		<tr>
			<td>1940</td>
			<td>6.7 million</td>
			<td>N/A</td>
		</tr>
		<tr>
			<td>1941</td>
			<td>7.3 million</td>
			<td>N/A</td>
		</tr>
		<tr>
			<td>1942</td>
			<td>7.7 million</td>
			<td>184 million</td>
		</tr>
		<tr>
			<td>1943</td>
			<td>8.9 million</td>
			<td>200 million</td>
		</tr>
		<tr
			><td>1944</td>
			<td>6.4 million</td>
			<td>223 million</td>
		</tr>
	</table>
</div>
<br><br><br><br>
<h2 class="lead">Percentage Of German Forces On The Eastern Front Each Year</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th>Unit</th>
			<th>1941</th>
			<th>1942</th>
			<th>1943</th>
			<th>1944</th>
		</tr>
		<tr>
			<td>Divisions</td>
			<td>67%</td>
			<td>75%</td>
			<td>60%</td>
			<td>57%</td>
		</tr>
		<tr>
			<td>Troops</td>
			<td>84%</td>
			<td>74%</td>
			<td>72%</td>
			<td>40%</td>
		</tr>
		<tr>
			<td>Aircraft</td>
			<td>64%</td>
			<td>65%</td>
			<td>42%</td>
			<td>45%</td>
		</tr>
	</table>
</div>
<br><br><br><br>
<h2 class="lead">U-Boat Losses</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th>Sunk By</th>
			<th>1939</th>
			<th>1940</th>
			<th>1941</th>
			<th>1942</th>
			<th>1943</th>
			<th>1944</th>
			<th>1945</th>
			<th>Total</th>
		</tr>
		<tr>
			<td>Aircraft Carrier</td>
			<td>0</td>
			<td>2</td>
			<td>3</td>
			<td>36</td>
			<td>140</td>
			<td>68</td>
			<td>40</td>
			<td>289</td>
		</tr>
		<tr>
			<td>Ships</td>
			<td>5</td>
			<td>11</td>
			<td>24</td>
			<td>32</td>
			<td>59</td>
			<td>68</td>
			<td>17</td>
			<td>216</td>
		</tr>
		<tr>
			<td>Bombs</td>
			<td>0</td>
			<td>0</td>
			<td>0</td>
			<td>0</td>
			<td>2</td>
			<td>24</td>
			<td>36</td>
			<td>62</td>
		</tr>
		<tr>
			<td>Mines</td>
			<td>3</td>
			<td>2</td>
			<td>0</td>
			<td>3</td>
			<td>1</td>
			<td>9</td>
			<td>7</td>
			<td>25</td>
		</tr>
		<tr>
			<td>Submarines</td>
			<td>1</td>
			<td>2</td>
			<td>1</td>
			<td>2</td>
			<td>4</td>
			<td>5</td>
			<td>3</td>
			<td>18</td>
		</tr>
		<tr>
			<td>Other</td>
			<td>0</td>
			<td>4</td>
			<td>5</td>
			<td>6</td>
			<td>17</td>
			<td>43</td>
			<td>17</td>
			<td>92</td>
		</tr>
		<tr>
			<td>Total</td>
			<td>9</td>
			<td>23</td>
			<td>35</td>
			<td>86</td>
			<td>236</td>
			<td>235</td>
			<td>122</td>
			<td>746</td>
		</tr>
	</table>
</div>
<br><br><br><br>
<h2 class="lead">German Flak</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th>Unit</th>
			<th>1939</th>
			<th>1940</th>
			<th>1941</th>
			<th>1942</th>
			<th>1943</th>
			<th>1944</th>
		</tr>
		<tr>
			<td>Heavy Guns</td>
			<td>2600</td>
			<td>3164</td>
			<td>3888</td>
			<td>4772</td>
			<td>8520</td>
			<td>10,600</td>
		</tr>
		<tr>
			<td>Light Guns</td>
			<td>6700</td>
			<td>8290</td>
			<td>9020</td>
			<td>10,700</td>
			<td>17,500</td>
			<td>19,360</td>
		</tr>
		<tr>
			<td>Searchlights</td>
			<td>2988</td>
			<td>3450</td>
			<td>3905</td>
			<td>4650</td>
			<td>5200</td>
			<td>7500</td>
		</tr>
		<tr>
			<td>% Under The Luftwaffe</td>
			<td>50%</td>
			<td>61%</td>
			<td>54%</td>
			<td>64%</td>
			<td>74%</td>
			<td>70%</td>
		</tr>
	</table>
</div>
<br><br><br><br>
<h2 class="lead">Mid-Year Manpower On The Eastern Front</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th>Year</th>
			<th>Soviet</th>
			<th>German</th>
		</tr>
		<tr>
			<td>1941</td>
			<td>5 million</td>
			<td>3.3 million</td>
		</tr>
		<tr>
			<td>1942</td>
			<td>5 million</td>
			<td>3.1 million</td>
		</tr>
		<tr>
			<td>1943</td>
			<td>6.2 million</td>
			<td>2.9 million</td>
		</tr>
		<tr>
			<td>1944</td>
			<td>6.8 million</td>
			<td>3.1 million</td>
		</tr>
	</table>
</div>
<br><br><br><br>
<h2 class="lead">Percentage Of All Allied Bombs Dropped</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th>Year</th>
			<th>%</th></tr>
			<tr>
				<td>1940</td>
				<td>.8%</td>
			</tr>
			<tr>
				<td>1941</td>
				<td>2%</td>
			</tr>
			<tr>
				<td>1942</td>
				<td>3%</td>
			</tr>
			<tr>
				<td>1943</td>
				<td>12.8%</td>
			</tr>
			<tr>
				<td>1944</td>
				<td>57.9%</td>
			</tr>
			<tr>
				<td>1945</td>
				<td>23.5%</td>
			</tr>
		</table>
	</div>
	<br><br><br><br>
	<h2 class="lead">Percentage Of Fighters and Bombers KIA or MIA</h2>
	<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<th>Tour Of Duty</th>
				<th>% KIA or MIA</th>
			</tr>
			<tr>
				<td>Fighters (300 combat hours)</td>
				<td>24%</td>
			</tr>
			<tr>
				<td>Medium bombers (50 missions</td>
				<td>48%</td>
			</tr>
			<tr>
				<td>Heavy bombers (30 missions)</td>
				<td>71%</td>
			</tr>
		</table>
	</div>
	<br><br><br><br>
	<h2 class="lead">D-Day Statistics</h2>
	<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<th>Unit</th>
				<th>Allies</th>
				<th>Germans</th>
				<th>Ratio</th>
			</tr>
			<tr>
				<td>Ground Troops</td>
				<td>1 million</td>
				<td>700,000</td>
				<td>1.43<b>:</b>1</td>
			</tr>
			<tr>
				<td>Replacements</td>
				<td>120,000</td>
				<td>20,000</td>
				<td>6<b>:</b>1</td>
			</tr>
			<tr>
				<td>Other Men</td>
				<td>1.75 million</td>
				<td>780,000</td>
				<td>2.25<b>:</b>1</td>
			</tr>
			<tr>
				<td>Total</td>
				<td>2.87 million</td>
				<td>1.5 million</td>
				<td>1.92<b>:</b>1</td>
			</tr>
		</table>
	</div>
	<br><br><br>
	<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<th>Unit</th>
				<th>Allies</th>
				<th>Germans</th>
				<th>Ratio</th>
			</tr>
			<tr>
				<td>Tanks</td>
				<td>5500</td>
				<td>1400</td>
				<td>3.93<b>:</b>1</td>
			</tr>
			<tr>
				<td>Artillery</td>
				<td>4800</td>
				<td>3200</td>
				<td>1.5<b>:</b>1</td>
			</tr>
			<tr>
				<td>Others</td>
				<td>2000</td>
				<td>800</td>
				<td>2.5<b>:</b>1</td>
			</tr>
		</table>
	</div>
	<br><br><br>
	<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<th>Air Force</th>
				<th>Bombers</th>
				<th>Fighters</th>
				<th>Total</th>
			</tr>
			<tr><td>RAF</td>
			<td>624</td>
			<td>2172</td>
			<td>2796</td>
		</tr>
		<tr>
			<td>USAAF</td>
			<td>1922</td>
			<td>1311</td>
			<td>3233</td>
		</tr>
		<tr>
			<td>Luftwaffe</td>
			<td>400</td>
			<td>420</td>
			<td>820</td>
		</tr>
		<tr>
			<td>Ratio</td>
			<td>6.4<b>:</b>1</td>
			<td>8.3<b>:</b>1</td>
			<td>7.4<b>:</b>1</td>
		</tr>
	</table>
</div>
<br><br><br><br>
<h2 class="lead">Percentage Of Combat Strength Kept In Non-Divisional Formations (regiment, battalion, etc.)</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th>Country</th>
			<th>%</th>
		</tr>
		<tr>
			<td>USA</td>
			<td>45%</td>
		</tr>
		<tr>
			<td>USSR</td>
			<td>20%</td>
		</tr>
		<tr>
			<td>Germany</td>
			<td>10%</td>
		</tr>
	</table>
</div>
<br><br><br><br>
<h2 class="lead">Total Number Of Weapons During World War 2</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th>Weapon Type</th>
			<th>World</th>
			<th>USA</th>
			<th>US %</th>
		</tr>
		<tr>
			<td>Aircraft</td>
			<td>542,000</td>
			<td>283,000</td>
			<td>52%</td>
		</tr>
		<tr>
			<td>Vehicles</td>
			<td>5.1 million</td>
			<td>2.47 million</td>
			<td>48%</td>
		</tr>
	</table>
</div>
<br><br><br><br>
<h2 class="lead">Convoy Battles</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th>Date</th>
			<th>Convoy Code</th>
			<th>Ships</th>
			<th>Sunk</th>
			<th>Tonnage</th>
			<th>German Subs</th>
			<th>Sunk</th>
		</tr>
		<tr>
			<td>October 1940</td>
			<td>SC-71, HX-79</td>
			<td>79</td>
			<td>32</td>
			<td>154,600</td>
			<td>12</td>
			<td>0</td>
		</tr>
		<tr>
			<td>September 1941</td>
			<td>SC-42</td>
			<td>70</td>
			<td>18</td>
			<td>73,200</td>
			<td>19</td>
			<td>2</td>
		</tr>
		<tr>
			<td>July 1942</td>
			<td>PQ-17</td>
			<td>42</td>
			<td>16</td>
			<td>102,300</td>
			<td>11</td>
			<td>0</td>
		</tr>
		<tr>
			<td>November 1942</td>
			<td>SC-107</td>
			<td>42</td>
			<td>15</td>
			<td>82,800</td>
			<td>18</td>
			<td>3</td>
		</tr>
		<tr>
			<td>December 1942</td>
			<td>ONS-154</td>
			<td>45</td>
			<td>19</td>
			<td>74,500</td>
			<td>19</td>
			<td>1</td>
		</tr>
		<tr>
			<td>March 1943</td>
			<td>SC-121, HX-228</td>
			<td>119</td>
			<td>16</td>
			<td>79,900</td>
			<td>37</td>
			<td>2</td>
		</tr>
	</table>
</div>
<br><br><br><br>
<h2 class="lead">800 U-Boats sank 2640 ships in the Atlantic</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th>Year</th>
			<th>Total Ships Sunk</th>
			<th>Sunk By Submarine</th>
		</tr>
		<tr>
			<td>1939</td>
			<td>222</td>
			<td>114</td>
		</tr>
		<tr>
			<td>1940</td>
			<td>1059</td>
			<td>471</td>
		</tr>
		<tr>
			<td>1941</td>
			<td>1299</td>
			<td>432</td>
		</tr>
		<tr>
			<td>1942</td>
			<td>1664</td>
			<td>1160</td>
		</tr>
		<tr>
			<td>1943</td>
			<td>597</td>
			<td>377</td>
		</tr>
		<tr>
			<td>1944</td>
			<td>205</td>
			<td>132</td>
		</tr>
		<tr>
			<td>1945</td>
			<td>105</td>
			<td>56</td>
		</tr>
	</table>
</div>
<br><br><br><br>
<h2 class="lead">US Daily Ammunition Expenditure In Tons</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th>Action</th>
			<th>Armor divisions</th>
			<th>Infantry divisions</th>
			<th>155mm battalions</th>
		</tr>
		<tr>
			<td>Attack</td>
			<td>436-832</td>
			<td>353-658</td>
			<td>66-121</td>
		</tr>
		<tr>
			<td>Defense</td>
			<td>596-969</td>
			<td>472-768</td>
			<td>86-142</td>
		</tr>
		<tr>
			<td>Pursuit</td>
			<td>107</td>
			<td>83</td>
			<td>15</td>
		</tr>
		<tr>
			<td>Delay</td>
			<td>321</td>
			<td>256</td>
			<td>51</td>
		</tr>
	</table>
</div>
</div>
<!-- END STATISTICI -->
<!-- Victime -->
<div id="victime">
<br><br>
<hr>
<br><br>
<h3 class="lead" align="center">World War 2 Casualties</h3><br><br><br>
<p>Here we offer detailed break-down of World War 2 Casualties listed by country. Please note that the figures in this table are unofficial estimates obtained from various sources.</p>
<br><br>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th>Country</th>
			<th>Soldiers</th>
			<th>KIA</th>
			<th>Wounded</th>
			<th>Civilians killed</th>
		</tr>
		<tr>
			<td >Australia</td>
			<td >1,000,000</td>
			<td >26,976</td>
			<td >180,864</td>
			<td >10,000</td>
		</tr>
		<tr>
			<td >Austria</td>
			<td >800,000</td>
			<td >280,000</td>
			<td >350,117</td>
			<td >125,000</td>
		</tr>
		<tr>
			<td >Belgium</td>
			<td >625,000</td>
			<td >8,460</td>
			<td >55,513</td>
			<td >76,000</td>
		</tr>
		<tr>
			<td >Brazil</td>
			<td >40,334</td>
			<td >943</td>
			<td >4,222</td>
			<td >-</td>
		</tr>
		<tr>
			<td>Bulgaria</td>
			<td>339,760</td>
			<td>6,671</td>
			<td>21,878</td>
			<td>10,000</td>
		</tr>
		<tr>
			<td>Canada</td>
			<td>1,086,343</td>
			<td>42,042</td>
			<td>53,145</td>
			<td >-</td>
		</tr>
		<tr>
			<td>China</td>
			<td>17,250,521</td>
			<td>1,324,516</td>
			<td>1,762,006</td>
			<td>7,750,000</td>
		</tr>
		<tr>
			<td>Czechoslovakia</td>
			<td>---</td>
			<td>6,683</td>
			<td>8,017</td>
			<td>294,000</td>
		</tr>
		<tr>
			<td>Denmark</td>
			<td>---</td>
			<td>4,339</td>
			<td>---</td>
			<td>2,000</td>
		</tr>
		<tr>
			<td>Finland</td>
			<td>500,000</td>
			<td>79,047</td>
			<td>50,000</td>
			<td>
			2,000</td>
		</tr>
		<tr>
			<td>France</td>
			<td>---</td>
			<td>201,568</td>
			<td>400,000</td>
			<td>350,000</td>
		</tr>
		<tr>
			<td>Germany</td>
			<td>20,000,000</td>
			<td>3,250,000</td>
			<td>7,250,000</td>
			<td >1,600,000</td>
		</tr>
		<tr>
			<td>Greece</td>
			<td>---</td>
			<td>17,024</td>
			<td>47,290</td>
			<td >325,000</td>
		</tr>
		<tr>
			<td>Hungary</td>
			<td>---</td>
			<td>147,435</td>
			<td>89,313</td>
			<td>290,000</td>
		</tr>
		<tr>
			<td>India</td>
			<td>2,393,891</td>
			<td>32,121</td>
			<td>64,354</td>
			<td >25,000</td>
		</tr>
		<tr>
			<td>Italy</td>
			<td>3,100,000</td>
			<td>149,496</td>
			<td>66,716</td>
			<td >153,000</td>
		</tr>
		<tr>
			<td>Japan</td>
			<td>9,700,000</td>
			<td>1,270,000</td>
			<td>140,000</td>
			<td >672,000</td>
		</tr>
		<tr>
			<td>Netherlands</td>
			<td>280,000</td>
			<td>6,500</td>
			<td>2,860</td>
			<td >200,000</td>
		</tr>
		<tr>
			<td>New Zealand</td>
			<td>194,000</td>
			<td>11,625</td>
			<td>17,000</td>
			<td >-</td>
		</tr>
		<tr>
			<td>Norway</td>
			<td>75,000</td>
			<td>2,000</td>
			<td>---</td>
			<td >7,000</td>
		</tr>
		<tr>
			<td>Poland</td>
			<td>---</td>
			<td>664,000</td>
			<td>530,000</td>
			<td >5,680,000</td>
		</tr>
		<tr>
			<td>Romania</td>
			<td>650,000</td>
			<td>350,000</td>
			<td>---</td>
			<td >200,000</td>
		</tr>
		<tr>
			<td>South Africa</td>
			<td>410,056</td>
			<td>2,473</td>
			<td>---</td>
			<td >-</td>
		</tr>
		<tr>
			<td>U.S.S.R.</td>
			<td>---</td>
			<td>6,115,000</td>
			<td>14,012,000</td>
			<td>-</td>
		</tr>
		<tr>
			<td>United Kingdom</td>
			<td>5,896,000</td>
			<td>357,116</td>
			<td>369,267</td>
			<td >92,700</td>
		</tr>
		<tr>
			<td>United States</td>
			<td>16,112,566</td>
			<td>291,557</td>
			<td>670,846</td>
			<td >6,000</td>
		</tr>
		<tr>
			<td>Yugoslavia</td>
			<td>3,741,000</td>
			<td>305,000</td>
			<td>425,000</td>
			<td >1,200,000</td>
		</tr>
	</table>
</div>
</div>
<!-- END VICTIME -->
<!-- TEHNOLOGII -->
<div id="tehno">
<br><br>
<hr>
<br><br>
<h1 align="center">Tehnologii</h1>
<br><br>
<p class="lead">
One hundred years ago, a half century before the atomic bombing of Hiroshima and Nagasaki, the discovery of x rays spotlighted the extraordinary promise, and peril, of the atom. From that time until 1942, atomic research was in private hands. The Second World War and the Manhattan Project, which planned and built the first atomic bombs, transformed a cottage industry of researchers into the largest and one of the most secretive research projects ever undertaken. Scientists who had once raced to publish their results learned to speak in codes accessible only to those with a "need to know." Indeed, during the war the very existence of the man-made element plutonium was a national secret.</p>
<p class="lead">
After the war's end, the network of radiation researchers, government and military officials, and physicians mobilized for the Manhattan Project did not disband. Rather, they began working on government programs to promote both peaceful uses of atomic energy and nuclear weapons development.</p>
<p class="lead">
Having harnessed the atom in secret for war, the federal government turned enthusiastically to providing governmental and nongovernmental researchers, corporations, and farmers with new tools for peace--radioisotopes--mass-produced with the same machinery that produced essential materials for the nation's nuclear weapons. Radioisotopes, the newly established Atomic Energy Commission (AEC) promised, would create new businesses, improve agricultural production, and through "human uses" in medical research, save lives.</p>
<p class="lead">
From its 1947 creation to the 1974 reorganization of atomic energy activities, the AEC produced radioisotopes that were used in thousands of human radiation experiments conducted at universities, hospitals, and government facilities. This research brought major advances in the understanding of the workings of the human body and the ability of doctors to diagnose, prevent, and treat disease.</p>
<p class="lead">
The growth of radiation research with humans after World War II was part of the enormous expansion of the entire biomedical research enterprise following the war. Although human experiments had long been part of medicine, there had been relatively few subjects, the research had not been as systematic, and there were far fewer promising interventions than there were in the late 1940s.</p>
<p class="lead">
With so many more human beings as research subjects, and with potentially dangerous new substances involved, certain moral questions in the relationship between the physician-researcher and the human subject--questions that were raised in the nineteenth century--assumed more prominence than ever: What was there to protect people if a researcher's zeal for data gathering conflicted with his or her commitment to the subjects' well-being? Was the age-old ethical tradition of the doctor-patient relationship, in which the patient was to defer to the doctor's expertise and wisdom, adequate when the doctor was also a researcher and the procedures were experimental?</p>
<p class="lead">
	While these questions about the role of medical researchers were fresh in the air, the Manhattan Project, and then the Cold War, presented new ethical questions of a different order.
</p>
<p class="lead">
In March 1946, former British Prime Minister Winston Churchill told an audience in Fulton, Missouri, that an "iron curtain" had descended between Eastern and Western Europe--giving a name to the hostile division of the continent that had existed since the end of World War II. By the following year, Cold War was the term used to describe this state of affairs between the United States and its allies on the one hand and the Soviet bloc on the other. A quick succession of events underscored the scope of this conflict, as well as the stakes involved: In 1948 a Soviet blockade precipitated a crisis over Berlin; in 1949, the American nuclear monopoly ended when the Soviet Union exploded its first atomic bomb; in 1950, the Korean War began.</p>
<p class="lead">
	The seeming likelihood that atomic bombs would be used again in war, and that American civilians as well as soldiers would be targets, meant that the country had to know as much as it could, as quickly as it could, about the effects of radiation and the treatment of radiation injury.
</p>
<p class="lead">
	This need for knowledge put radiation researchers, including physicians, in the middle of new questions of risk and benefit, disclosure and consent. The focus of these questions was, directly and indirectly, an unprecedented public health hazard: nuclear war. In addressing these questions, medical researchers had to define the new roles that they would play.
</p>
<p class="lead">
	As advisers to the government, radiation researchers were asked to assist military commanders, who called for human experimentation to determine the effects of atomic weapons on their troops. But these researchers also knew that human experimentation might not readily provide the answers the military needed.
</p>
<p class="lead">
	As physicians, they had a commitment to prevent disease and heal. At the same time, as government advisers, they were called upon to participate in making decisions to proceed with weapons development and testing programs that they knew could put citizens, soldiers, and workers at risk. As experts they were asked to ensure that the risks would not be excessive. And as researchers they saw these programs as an opportunity for gathering data.
</p>
<p class="lead">
	As researchers, they were often among the first to volunteer to take the risks that were unavoidable in such research. But the risks could not always be disclosed to members of the public who were also exposed.
</p>
<p class="lead">
In keeping with the tradition of scientific inquiry, these researchers understood that their work should be the subject of vigorous discussion, at least among other scientists in their field. But, as government officials and advisers, they understood that their public statements had to be constrained by Cold War national security requirements, and they shared in official concern that public misunderstanding could compromise government programs and their own research.</p>
<p class="lead">
	Medical researchers, especially those expert in radiation, were not oblivious to the importance of the special roles they were being asked to play. "Never before in history," began the 1949 medical text Atomic Medicine, "have the interests of the weaponeers and those who practice the healing arts been so closely related." This volume, edited by Captain C. F. Behrens, the head of the Navy's new atomic medicine division, was evidently the first treatise on the topic.
</p>
<p class="lead">
	It concluded with a chapter by Dr. Shields Warren, the first chief of the AEC's Division of Biology and Medicine, who would become a major figure in setting policy for postwar biomedical radiation research. While the atomic bomb was not "of medicine's contriving," the book began, it was to physicians "more than to any other profession" that atomic energy had brought a "bewildering array of new problems, brilliant prospects, and inescapable responsibilities."
</p>
<p class="lead">
	The text, a prefatory chapter explained, treats "not of high policy, of ethics, of strategy or of international control [of nuclear materials], as physicians these matters are not for us."[3] Yet what many readers of Atomic Medicine could not know in 1949 was that Behrens, along with Warren and other biomedical experts, was already engaged in vigorous but secret discussions of the ethics underlying human radiation experiments. At the heart of these discussions lay difficult choices at the intersection of geopolitics, science, and medicine that would have a fundamental impact on the federal government's relationship with the American people.
</p>
<p class="lead">
	Radiation has existed in nature from the origins of the universe, but was unknown to man until a century ago. Its discovery came by accident. On a Friday evening, November 8, 1895, the German physicist Wilhelm Roentgen was studying the nature of electrical currents by using a cathode ray tube, a common piece of scientific equipment.
</p>
<p class="lead">
	When he turned the tube on, he noticed to his surprise that a glowing spot appeared on a black paper screen coated with fluorescent material that was across the room. Intrigued, he soon determined that invisible but highly penetrating rays were being produced at one end of the cathode ray tube. The rays could expose photographic plates, leaving shadows of dense objects, such as bone.
</p>
<p class="lead">
	After about six weeks of experimenting with his discovery, which he called x rays, Roentgen sent a summary and several "shadow pictures" to a local scientific society. The society published the report in its regular journal and wisely printed extra copies. News spread rapidly; Roentgen sent copies to physicists throughout Europe. One Berlin physicist "could not help thinking that I was reading a fairy tale . . . only the actual photograph proved to everyone that this was a fact."
</p>
<p class="lead">
	Physicians immediately recognized these rays as a new tool for diagnosis, a window into the interior of the body. The useless left arm of German Emperor Wilhelm II was x-rayed to reveal the cause of his disability, while Queen Amelia of Portugal used x rays of several of her court ladies to vividly display the dangers of "tightlacing."
</p>
<p class="lead">
	Physicians began to use x rays routinely for examining fractures and locating foreign objects, such as needles swallowed by children or bullets shot into adults. During World War I, more than 1.1 million wounded soldiers were treated with the help of diagnostic x rays.
</p>
<p class="lead">
	In 1896, Roentgen's insight led to the discovery of natural radioactivity. Henri Becquerel, who had been studying phosphorescence, discovered that shadow pictures were also created when wrapped photographic plates were exposed to crystals partly composed of uranium. Could this radioactive property be concentrated further by extracting and purifying some as-yet-unknown component of the uranium crystals? Marie and Pierre Curie began laborious chemical analyses that led to the isolation of the element polonium, named after Marie's native Poland. Continuing their work, they isolated the element radium. To describe these elements' emission of energy, they coined the word radioactivity.
</p>
<p class="lead">
	As with x rays, popular hopes and fears for natural radioactivity far exceeded the actual applications. One 1905 headline captures it all: "Radium, as a Substitute for Gas, Electricity, and as a Positive Cure for Every Disease." Following initial enthusiasm that radiation could, by destroying tumors, provide a miracle cure for cancer, the reappearance of irradiated tumors led to discouragement.
</p>
<p class="lead">
	Despite distressing setbacks, research into the medical uses of radiation persisted. In the 1920s French researchers, performing experiments on animals, discovered that radiation treatments administered in a series of fractionated doses, instead of a single massive dose, could eliminate tumors without causing permanent damage. With the new method of treatment, doctors began to report impressive survival rates for patients with a variety of cancers. Fractionation became, and remains, an accepted approach to cancer treatment.
</p>
<p class="lead">
	Along with better understanding of radiation's benefits came a better practical appreciation of its dangers. Radiation burns were quickly apparent, but the greater danger took longer to manifest itself. Doctors and researchers were frequently among the victims. Radiation researchers were also slow to take steps to protect themselves from the hidden danger. One journal opened its April 1914 issue by noting that "[w]e have to deplore once more the sacrifice of a radiologist, the victim of his art."(April 1914): 393.
</p>
<p class="lead">
	Clear and early evidence of tragic results sharpened both expert and public concern. By 1924, a New Jersey dentist noticed an unusual rate of deterioration of the jawbone among local women. On further investigation he learned that all at one time had jobs painting a radium solution onto watch dials.
</p>
<p class="lead">
	Further studies revealed that as they painted, they licked their brushes to maintain a sharp point. Doing so, they absorbed radium into their bodies. The radium gradually revealed its presence in jaw deterioration, blood disease, and eventually, a painful, disfiguring deterioration of the jaw.
</p>
<p class="lead">
	There was no question that radium was the culprit. The immediate outcome was a highly publicized crusade, investigation, lawsuits, and payments to the victims. Despite the publicity surrounding the dial painters, response to the danger remained agonizingly slow. Patent medicines containing radium and radium therapies continued.
</p>
<p class="lead">
	The tragedy of the radium dial painters and similar cases of patients who took radium nostrums have provided basic data for protection standards for radioactive substances taken into the body. One prominent researcher in the new area of radiation safety was Robley Evans.
</p>
<p class="lead">
	Evans was drawn into the field by the highly publicized death in 1932 of Eben Byers, following routine consumption of the nostrum Radiothor. Byers's death spurred Evans, then a California Institute of Technology physics graduate student, to undertake research that led to a study of the effects on the body of ingesting radium; this study would continue for more than half a century.
</p>
<p class="lead">
	Evans's study and subsequent studies of the effects of radium treatments provided the anchor in human data for our understanding of the effects of radiation within the human body. As the dangers of the imprudent use of x rays and internal radiation became clear, private scientific advisory committees sprang up to develop voluntary guidelines to promote safety among those working with radiation. When the government did enter the atomic age, it often referred to the guidelines of these private committees as it developed radiation protection standards.
</p>
<p class="lead">
	The Miracle of Tracers
	In 1913, the Hungarian chemist Georg von Hevesy began to experiment with the use of radioactive forms of elements (radioisotopes) to trace the behavior of the normal, nonradioactive forms of a variety of elements. Ten years later Hevesy extended his chemical experiments to biology, using a radioisotope of lead to trace the movement of lead from soil into bean plants. In 1943, Hevesy won the Nobel Prize for his work on the use of radioisotopes as tracers.
</p>
<p class="lead">
	Previously, those seeking to understand life processes of an organism had to extract molecules and structures from dead cells or organisms, and then study those molecules by arduous chemical procedures, or use traceable chemicals that were foreign to the organism being studied but that mimicked normal body chemicals in some important way. Foreign chemicals could alter the very processes being measured and, in any case, were often as difficult to measure precisely as were normal body constituents.
</p>
<p class="lead">
	The radioactive tracer--as Our Friend the Atom, a book written by Dr. Heinz Haber for Walt Disney productions, explained in 1956 to readers of all ages--was an elegant alternative: "Making a sample of material mildly radioactive is like putting a bell on a sheep. The shepherd traces the whole flock around by the sound of the bell. In the same way it is possible to keep tabs on tracer-atoms with a Geiger counter or any other radiation detector."
</p>
<p class="lead">
	By the late 1920s the tracer technique was being applied to humans in Boston by researchers using an injection of dissolved radon to measure the rate of blood circulation, an early example of using radioactivity to observe life processes. However, research opportunities were limited by the fact that some of the elements that are most important in living creatures do not possess naturally occurring radioactive isotopes.
</p>
<p class="lead">
	The answer to this problem came simultaneously at faculty clubs and seminars in Berkeley and Boston in the early 1930s. Medical researchers realized that the famed "atom smasher," the cyclotron invented by University of California physicist Ernest Lawrence, could be used as a factory to create radioisotopes for medical research and treatment. "Take an ordinary needle," Our Friend the Atom explained, "put it into an atomic reactor for a short while. Some of the ions contained in the steel will capture a neutron and be transformed into a radioisotope of iron. . . . Now that needle could be found in the proverbial haystack without any trouble."
</p>
<p class="lead">
	In 1936, two of Lawrence's Berkeley colleagues, Drs. Joseph Hamilton and Robert Stone, administered radiosodium to treat several leukemia patients. In 1937, Ernest Lawrence's brother, physician John Lawrence, became the first to use radiophosphorus for the treatment of leukemia. This application was extended the following year to the treatment of polycythemia vera, a blood disease.
</p>
<p class="lead">
	This method soon became a standard treatment for that disease. In 1938, Hamilton and Stone also began pioneering work in the use of cyclotron-produced neutrons for the treatment of cancer. The following year, not long before the war in Europe began, Ernest Lawrence unveiled a larger atom smasher, to be used to create additional radioisotopes and hence dubbed the "medical cyclotron." The discovery that some radioisotopes deposited selectively in different parts of the body--the thyroid, for example--inspired a spirited search for a radioactive "magic bullet" that might treat, or even cure, cancer and other diseases.
</p>
<p class="lead">
	In Cambridge, the age of "nuclear medicine" is said to have begun in November 1936 with a lunchtime seminar at Harvard, at which MIT President Karl Compton talked on "What Physics Can Do for Biology and Medicine." Robley Evans, by that time at MIT, is reported to have helped prepare the portion of the talk from which medical researchers at the Massachusetts General Hospital's thyroid clinic came to realize that MIT's atom smasher could produce a great research tool for their work--radioisotopes.
</p>
<p class="lead">
	Soon, doctors at the thyroid clinic began a series of experiments, including some involving humans, that would lead to the development of radioiodine as a standard tool for diagnosing and treating thyroid disease.
</p>
<p class="lead">
	In late 1938, the discovery of atomic fission in Germany prompted concern among physicists in England and the United States that Nazi Germany might be the first to harness the power of the atom--as a propulsion method for submarines, as radioactive poison, or most worrisome of all, as a bomb capable of unimagined destruction. In the United States, a world-famous physicist, Albert Einstein, and a recent émigré from Hungary, Leo Szilard, alerted President Franklin D. Roosevelt to the military implications of the German discovery in an August 1939 letter.
</p>
<p class="lead">
	Assigning his own science adviser, Vannevar Bush, to the task of determining the feasibility of an atomic bomb, Roosevelt's simple "O.K.," scrawled on a piece of paper, set in motion the chain of events that would lead to the largest and most expensive engineering project in history. Soon, Ernest Lawrence's Radiation Laboratory and its medical cyclotron were mobilized to aid in the nationwide effort to build the world's first atomic bomb. In a related effort, Drs. Stone and Hamilton, and others, would turn their talents to the medical research needed to ensure the safety of those working on the bomb.
</p>
<p class="lead">
	On August 6, 1945, when the atomic bomb was dropped on Hiroshima, the most sensitive of secrets became a symbol for the ages. A week later, the bomb was the subject of a government report that revealed to the public the uses of plutonium and uranium. Immediately, debate began over the future of atomic energy. Could it be controlled at the international level? Should it remain entirely under control of the military? What role would industry have in developing its potential? Although American policymakers failed to establish international control of the bomb, they succeeded in creating a national agency with responsibility for the domestic control of atomic energy.
</p>
<p class="lead">
	The most divisive question in the creation of the new agency that would hold sway over the atom was the role of the military. Following congressional hearings, the Atomic Energy Commission was established by the 1946 McMahon Act, to be headed by five civilian commissioners. President Truman appointed David Lilienthal, former head of the Tennessee Valley Authority, as the first chairman of the AEC, which took over responsibilities of the Manhattan Engineer District in January 1947.
</p>
<p class="lead">
	Also in 1947, under the National Security Act, the armed services were put under the authority of the newly created National Military Establishment (NME), to be headed by the secretary of defense. In 1949 the National Security Act was amended, and the NME was transformed into an executive department--the Department of Defense. The Armed Forces Special Weapons Project, which would coordinate the Defense Department's responsibilities in the area of nuclear weapons, became the military heir to the Manhattan Engineer District. The Military Liaison Committee was also established as an intermediary between the Atomic Energy Commission and the Defense Department; it was also to help set military requirements for the number and type of nuclear weapons needed by the armed services.
</p>
<p class="lead">
	Even before the AEC officially assumed responsibility for the bomb from the Manhattan Project, the Interim Medical Advisory Committee, chaired by former Manhattan Project medical director Stafford Warren, began meeting to map out an ambitious postwar biomedical research program. Former Manhattan Project contractors proposed to resume the research that had been interrupted by the war and to continue wartime radiation effects studies upon human subjects.
</p>
<p class="lead">
	In May 1947, Lilienthal commissioned a blue-ribbon panel, the Medical Board of Review, that reported the following month on the agency's biomedical program. In strongly recommending a broad research and training program, the board found the need for research "both urgent and extensive." The need was "urgent because of the extraordinary danger of exposing living creatures to radioactivity.
</p>
<p class="lead">
	It is urgent because effective defensive measures (in the military sense) against radiant energy are not yet known." The board, pointing to the AEC's "absolute monopoly of new and important tools for research and important knowledge," noted the commensurate responsibilities--both to employees and others who could suffer from "its negligence or ignorance" and to the scientific world, with which it was obliged to "share its acquisitions . . . whenever security considerations permit." In the fall of 1947, as recommended by the Medical Board of Review, the AEC created a Division of Biology and Medicine (DBM) to coordinate biomedical research involving atomic energy and an Advisory Committee for Biology and Medicine (ACBM), which reported directly to the AEC's chairman.
</p>
<p class="lead">
	Not surprisingly, the DBM and ACBM became gathering places for the luminaries of radiation science. The ACBM was headed by a Rockefeller Foundation official, Dr. Alan Gregg. It settled on Dr. Shields Warren, a Harvard-trained pathologist, to serve as the first chief of the DBM. Warren, as we shall see, would play a central role in developments related to radiation research and human experimentation.
</p>
<p class="lead">
	In the 1930s, focusing on cancer research, and influenced by the work of Hevesy and the pioneering radioisotope work being done in Berkeley and Boston, Warren turned to the question of the effects of radiation on animals and the treatment of acute leukemia, the "most hopeless . . . of tumors at that time." As the war neared, Warren enlisted in the Naval Reserve. He continued medical work for the Navy, turning down an invitation to join Stafford Warren (no relation) on "a project . . . that he couldn't tell me anything about [the Manhattan Project]."
</p>
<p class="lead">
	While most of the AEC's budget would be devoted to highly secret weapons development and related activities, the biomedical research program represented the commission's proud public face. Even before the AEC opened its doors, Manhattan Project officials and experts had laid the groundwork for a bold program to encourage the use of radioisotopes for scientific research, especially in medicine. This program was first presented to the broad public in a September 1946 article in the New York Times Magazine. The article began dramatically by describing the use of "radioactive salt" to measure circulation in a crushed leg, so that a decision on whether to amputate below or above the knee could be made.
</p>
<p class="lead">
	By November 1946, the isotope distribution program was well under way, with more than 200 requests approved, about half of which were designated for "human uses." From the beginning, the AEC's Isotope Division at Oak Ridge had in its program director, Paul Aebersold, a veritable Johnny Appleseed for radioelements.
</p>
<p class="lead">
	In presentations before the public and to researchers, Aebersold, dubbed "Mr. Isotope," touted the simplicity and low cost with which scientists would be provided with radioisotopes: "The materials and services are made available . . . with a minimum of red tape and under conditions which encourage their use."At an international cancer conference in St. Louis in 1947, the AEC announced that it would make radioisotopes available without cost for cancer research and experimental cancer treatment. This, Shields Warren later recalled, had a "tremendous effect" and "led to a revolution in the type of work done in this field."
</p>
<p class="lead">
	To AEC administrators, Aebersold emphasized the benefits to the AEC's public image: "Much of the Commission's success is judged by the public and scientists . . . on its willingness to carry out a wide and liberal policy on the distribution of materials, information, and services," he wrote in a memo to the AEC's general manager.
</p>
<p class="lead">
	The AEC biomedical program as a whole also provided for funding of cancer research centers, research equipment, and numerous other research projects. Here, too, were advances that would save many lives. Before the war, radiotherapy had reached a plateau, limited by the cost of radium and the inability of the machines of the time to focus radiation precisely on tumors to the exclusion of surrounding healthy tissue.
</p>
<p class="lead">
	AEC facilities inherited from the Manhattan Project could produce radioactive cobalt, a cheaper substitute for radium. As well, the AEC's "teletherapy" program funded the development of new equipment capable of producing precisely focused high-energy beams.
</p>
<p class="lead">
	The AEC's highly publicized peacetime medical program was not immune to the pressures of the Cold War political climate. Even the lives of young researchers in the AEC Fellowship Program conducting nonclassified research were subject to Federal Bureau of Investigation review despite protests from commission members.
</p>
<p class="lead">
	Congressionally mandated Cold War requirements such as loyalty oaths and noncommunist affidavits, Chairman Lilienthal declared, would have a chilling effect on scientific discussion and could damage the AEC's ability to recruit a new generation of scientists. The reach of the law, the Advisory Committee for Biology and Medicine agreed, was like a "blighting hand; for thoughtful men now know how political domination can distort free inquiry into a malignant servant of expediency and authoritarian abstraction." Nonetheless, the AEC accepted the congressional conditions for its fellowship program and determined to seek the program's expansion.
</p>
<p class="lead">
	The AEC's direct promotional efforts were multiplied by the success of Aebersold and his colleagues in carrying the message to other government agencies, as well as to industry and private researchers. This success led, in turn, to new programs.
</p>
<p class="lead">
	In August 1947, General Groves urged Major General Paul Hawley, the director of the medical programs of the Veterans Administration, to address medical problems related to the military's use of atomic energy. Soon thereafter, Hawley appointed an advisory committee, manned by Stafford Warren and other medical researchers. The advisers recommended that the VA create both a "publicized" program to promote the use of radioisotopes in research and a "confidential" program to deal with potential liability claims from veterans exposed to radiation hazards. The "publicized" program soon mushroomed, with Stafford Warren, Shields Warren, and Hymer Friedell among the key advisers.
</p>
<p class="lead">
	By 1974, according to VA reports, more than 2,000 human radiation experiments would be performed at VA facilities, many of which would work in tandem with neighboring medical schools, such as the relationship between the UCLA medical school, where Stafford Warren was now dean, and the Wadsworth (West Los Angeles) VA Hospital.
</p>
<p class="lead">
	While the AEC's weapons-related work would continue to be cloaked in secrecy, the isotope program was used by researchers in all corners of the land to achieve new scientific understanding and help create new diagnostic and therapeutic tools. It was, however, only a small part of an enormous institution. By 1951 the AEC would employ 60,000 people, all but 5,000 through contractors. Its land would encompass 2,800 square miles, an area equal to Rhode Island and Delaware combined.
</p>
<p class="lead">
In addition to research centers throughout the United States, its operations "extend[ed] from the ore fields of the Belgian Congo and the Arctic region of Canada to the weapons proving ground at Enewetak Atoll in the Pacific and the medical projects studying the after-effects of atomic bombing in . . . Japan." The Isotope Division, however, would employ only about fifty people and, when reactor production time was accounted for, occupy only a fraction of its budget and resources.</p>
</div>
<!-- END TEHNOLOGII -->
<!-- URMARI -->
<div id="urmari">
<br><br>
<hr>
<br><br>
<h2 class="lead" align="center">Urmări</h2>
<p class="lead">Three days after the destruction of Hiroshima, Robert Stone wrote two letters to Stafford Warren's deputy, and Stone's former student, Hymer Friedell. The first expressed hope that the contribution of medical researchers could now be made public, so that people would know what they had done during the war.</p>
<p class="lead">The second letter described Stone's "mixed feelings" at the success that had been achieved and his fear that the lingering effects of radiation from the bomb had been underestimated: "I could hardly believe my eyes," Stone wrote, "when I saw a series of news releases said to be quoting Oppenheimer, and giving the impression that there is no radioactive hazard. Apparently all things are relative."</p>
<p class="lead">Friedell and other researchers, including Stafford Warren and Shields Warren, soon traveled to Hiroshima and Nagasaki to begin what became an extensive research program on survivors. The data from that project quickly became and still remain the essential source of information on the long-term effects of radiation on populations of human beings.</p>
<p class="lead">It was not long, however, before there were additional real-life data on the bomb, from postwar atomic tests. In 1946, the United States undertook the first peacetime nuclear weapons tests at Bikini Atoll in the Marshall Islands. Operation Crossroads, conducted before journalists and VIPs from around the world, was intended to test the ability of a flotilla of unmanned ships to withstand the blast. Since most of the ships remained afloat, the Navy declared Crossroads a triumph.</p>
<p class="lead">Behind the scenes, however, Crossroads medical director Stafford Warren expressed horror at the level of contamination on the ships due to the underwater atomic blast. When the ships returned to the West Coast from the Pacific, they were extensively studied to assess the damage and contamination from the atomic bombs.</p>
<p class="lead">The government created the Naval Radiological Defense Laboratory (NRDL) to study the effects of atomic bombs on ships and to design ways to protect them. "Crossroads," according to an NRDL history, "left no doubt that man was faced with the necessity for coping with strange and unprecedented problems for which no solutions were available."</p>
<p class="lead">Hiroshima and Nagasaki, it now seemed, were only the beginning, not the end, of human exposure to bomb-produced radiation. As Crossroads confirmed with the lingering problem of contaminated ships, what the bomb did not obliterate it might still damage by radiation over the course of days or years. It was no longer enough to know about the effects of radioactive materials on American nuclear weapons workers; now there was the urgent need to understand the effects on American soldiers, sailors, and even citizens as well.</p>
<p class="lead">Largely invisible to the public, an ad hoc bureaucracy sprang up to address the medical and radiation research problems of atomic warfare. This bureaucracy brought together former wartime radiation researchers, who were joined by junior colleagues, to advise, and participate in, the government's growing radiation research program. Other, already established groups--such as the AEC's Division of Biology and Medicine and its advisory committee--also had important places in the new network.</p>
<p class="lead">Beyond considering fallout from the testing of atomic bombs, these groups also looked at how radiation itself might be used as a weapon. During the war, scientists like J. Robert Oppenheimer had speculated on the possibility that fission products (radioactive materials produced by the bomb or by reactors) could be dispersed in the air and on the ground to kill or incapacitate the enemy. In 1946, the widespread contamination of ships at Crossroads by radioactive mist gave dramatic evidence of the potential of so-called radiological warfare, or RW. In 1947, the military created a committee of experts to study the problem.</p>
<p class="lead">The following year, a blue-ribbon panel of physicians and physicists looked at the prospects, both offensive and defensive, of what the Pentagon termed "Rad War." The work of these panels would lead to dozens of intentional releases of radiation into the environment at the Army's Dugway, Utah, testing grounds from the late 1940s to the early 1950s. The very fact that the government was engaged in RW tests was a secret. Indeed, the records of the RW program--including, as we shall see in chapter 11, the debate on what the public should be told about the program--would remain largely secret for almost fifty years.</p>
<p class="lead">In 1949, a military program to build a nuclear-powered airplane led to a set of proposed human radiation experiments. The NEPA (Nuclear Energy for the Propulsion of Aircraft) program had its origins in 1946 as a venture that included the Manhattan Project's Oak Ridge site, the military, and private aircraft manufacturers. Robert Stone, as we shall see in chapter 8, was a leading proponent of experiments involving healthy volunteers, as a key to answering questions about the radiation hazard faced by the crew of the proposed airplane.</p>
<p class="lead">The NEPA and RW groups considered important, but still discrete, projects. Where did the "big picture" discussions take place? The Advisory Committee has pieced together the records of the Armed Forces Medical Policy Council, the Committee on Medical Sciences, and the Joint Panel on the Medical Aspects of Atomic Warfare. These three Defense Department groups, all chaired by civilian doctors, guided the government on both the broad subject of military-related biomedical research and the new and special problems posed by atomic warfare.</p>
<p class="lead">If the surviving records are an indication, from its creation in 1949 to its evident demise with the reorganization of the Defense Department in 1953, the Joint Panel quickly became the hub of atomic warfare-related biomedical research. The Joint Panel gathered information about relevant research from all corners of the government, provided guidance for Defense Department programs, and reviewed and coordinated policy in the matter of human experimentation using atomic energy.</p>
<p class="lead">By charter, the group was to be headed by a civilian. Harvard's Dr. Joseph Aub, a long-standing member of the Boston-based medical research community who had worked with Robley Evans on the study of the radium dial painters and had also studied lead toxicity, served as chair. Those who served with Aub included Evans, Hymer Friedell, and Louis Hempelmann, Oppenheimer's Manhattan Project medical aide. Other government participants came from the AEC, the Public Health Service, the National Institutes of Health, the Veterans Administration, and the CIA. (The charter provided that the Joint Panel should collect information on relevant research conducted abroad, which the CIA evidently provided.)</p>
<p class="lead">This bureaucracy provided the venue for secret discussions that linked the arts of healing and war in ways that had little precedent. At one and the same time, for example, doctors counseled the military about the radiation risk to troops at the site of atomic bomb tests, advised on the need for research on the "psychology of panic" at such bomb tests, and debated the need for rules to govern atomic warfare-related experimentation.</p>
<p class="lead">The records of the Joint Panel show that, during the height of the Cold War, the resources of civilian agencies were part of the mobilization of resources to serve national security interests. For example, Dr. Howard Andrews, trained as a physicist, was the National Institutes of Health's representative to the Joint Panel, and in the 1950s he worked with the DOD and the AEC in monitoring safety measures and measuring fallout from nuclear tests.</p>
<p class="lead">In 1950 President Truman ordered federal agencies, including the Public Health Service and NIH, to focus their resources on activities that would benefit national security needs. On paper, at least, PHS and NIH policymakers sought to direct resources to questions of radiation injury, civil defense, and worker health and safety.</p>
<p class="lead">For example, a 1952 internal planning memo explained that NIH "will not wait for formal requests by the armed forces . . . to undertake research which NIH staff knows to be of urgent military and civilian defense significance. Limited selective conversion of research to work directly related to biological warfare, shock, radiation injury and thermal burns will begin immediately. . . ." The fragmentary surviving documentation, however, does not show the extent to which PHS- and NIH-funded researchers actually redirected their investigations or merely recast the purpose of ongoing work.</p>
<!-- END URMARI -->
<!-- END CONTENT -->
<!-- FOOTER -->
<br><br><br>
<hr>
<footer class="footer">
	<div class="container text-center">
		<span class="text-muted">&copy; 2019-2020: Catarau Cezar-Iulian</span>
	</div>
</footer>
<br>
<!-- END FOOTER -->
<!-- BOOTSTRAP JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- END BOOTSTRAP JS -->
<script type="text/javascript">
	
	var topBtn  = document.getElementById('topBtn');
	var navBar = document.getElementById('navBar');
	window.onscroll = function() {scrollFunction()};
	function scrollFunction()
	{
		if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 200)
				topBtn.style.cssText = "display: block; z-index: 2;";
		else
			topBtn.style.display = "none";
	}
	function toTop()
	{
		document.documentElement.scrollTop = 0;
	}
</script>
</body>
</html>