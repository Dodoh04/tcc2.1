<?php
	if(isset($_SESSION['mensagem'])) {
		echo '<div class="mensagem-box">' . $_SESSION['mensagem'] . '</div>';
?>
		<style>
			.mensagem-box {
				display: block;
				background-color: #05C7F2;
				color: #000;
				border: 1px solid #ccc;
				padding: 10px;
				margin-bottom: 10px;
				width: 300px;
				border-radius: 10px;
				position: absolute;
			}
		</style>

		<script>
			setTimeout(function() {
				document.querySelector('.mensagem-box').style.display = 'none';
			}, 5000); // 5 segundos
		</script>
<?php
	}else{}
?>
