<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<script src="fizzbuzz-test.js"></script>


	<title>Document</title>
</head>
<style>
	.container {
		display: flex;
		flex-wrap: wrap;
	}

	span {
		margin: 5px;
		padding: 10px;
	}

	.fizzbuzz {
		background-color: yellow;
	}

	.fizz {
		background-color: green;
		color: white;
	}

	.buzz {
		background-color: blue;
		color: white;
	}

	.number {
		background-color: gray;
		color: white;
	}
</style>

<body>
	<h1 class="text-center text-decoration-underline">
		fizzbuzz-test
	</h1>
	<div class="text-center mt-3 perkenalan">
		<img src="imam mukhlash.jpg" alt="" class="rounded-circle" width="200">

		<p class="lead mt-3">Imam Mukhlash | Umur: 22 | Status: Mahasiswa Telkom University</p>

		<h2>SOAL:</h2>
		<p>Buat loop yang mencetak angka 1-100, JIKA kelipatan 3 maka outputnya "Fizz" , JIKA kelipatan 5 outputnya "Buzz" dan JIKA kelipatan 3 dan 5 keluarkan 'FizzBuzz'.</p>
		<h2>Jawaban</h2>
		<!-- Bagian PHP -->

		<p>Berikut ini hasil tampilan <strong>PHP</strong> nya: </p>

		<div class="container mb-5">
			<?php
			for ($i = 1; $i <= 100; $i++) {
				if ($i % 3 === 0 && $i % 5 === 0) {
					echo "<span class='fizzbuzz'>FizzBuzz</span>";
				} elseif ($i % 3 === 0) {
					echo "<span class='fizz'>Fizz</span>";
				} elseif ($i % 5 === 0) {
					echo "<span class='buzz'>Buzz</span>";
				} else {
					echo "<span class='number'>$i</span>";
				}
			}
			?>
		</div>

		<!-- Bagian JS -->
		<p>Berikut ini hasil tampilan <strong>Javascript</strong> nya: </p>
		<div id="result" class="container mb-5">

		</div>

	</div>






	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
