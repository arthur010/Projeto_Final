<?php include './header.php' ?>


            <h1 >Conclua seu pedido </h1> 

<form action="comentario.php" method="get">
			<fieldset>
				<legend>Entregar o pedido a:</legend>
				
				<label for="nome">Nome</label>
				<input  required type="text" id="nome" name="nome" placeholder="digite seu nome"><br>
			
				<legend>Onde entregar o pedido?</legend>
				<label for="tipoLog">Tipo Logradouro</label>
				<select required>
					<option>Selecione</option>
					<option>Av.</option>
					<option>Rua</option>
					<option>Travessa</option>
					<option>Estrada</option>

				</select>

				<label for="log"></label>
				<input  required type="text" id="log" placeholder="Digite seu endereço">

				<label for="numeroLog"> Número</label>
				<input  required type="text" id="numeroLog" placeholder="digite o seu n°">

				<label for="uf"> UF</label>
				<select>
				<option>RJ</option>
				<option>ES</option>
				<option>SP</option>
				</select>
				<br>
				
				<legend>Telefone para contato</legend>
				<label for="Telefone">Telefone</label>
				<input  required type="tel" id="Telefone" name="telefone" placeholder="(021) 99999-9999"><br>
			
	
	<form action="comentario.php" method="get">
			<fieldset>
				<legend>Forma de pagamento</legend>
				
				<input  required type="radio" id="Cartão" name="pagamento">
				<label for="Cartão">Cartão</label>
				
				<input  required type="radio" id="Dinheiro" name="pagamento"
				<label for="Dinheiro">Dinheiro</label>

				</select>

				<br>		
	</form>
	</form>
	
	 <button type="submit" class="btn btn-primary mb-2" href="Início.html">concluir pedido</button>

   <?php include './footer.php' ?>