<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
   
</head>
<body>
    <link rel="stylesheet" href="cadastro.css">
    <div class="container">
        <div class="form-image">
            <img src="image/banner.svg" alt="">
        </div>
        <div class="form">
            <form action="/cadastro">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                   
                </div>
 
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
                    </div>
 
                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>
 
                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required size="15" maxlength="12">
                    </div>
 
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>
 
 
                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>
 
                </div>
 
                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>
 
                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="gender" required>
                            <label for="female">Feminino</label>
                        </div>
 
                        <div class="gender-input">
                            <input id="male" type="radio" name="gender" required>
                            <label for="male">Masculino</label>
                        </div>
 
                        <div class="gender-input">
                            <input id="others" type="radio" name="gender" required>
                            <label for="others">Outros</label>
                        </div>
 
                        <div class="gender-input">
                            <input id="none" type="radio" name="gender" required>
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
 
                <div class="form-header">
                    <div class="title">
                        <h2>Endereço</h2>
                    </div>
                </div><br>
                <label class="estado">Estado:</label>
                  <select name="estado" id="uf">
                    <option value="0">Escolha sua Região</option>
                    <optgroup label="Norte">
                      <option value="1">Acre</option>
                      <option value="2">Amazonas</option>
                      <option value="3">Amapá</option>
                      <option value="4">Pará</option>
                      <option value="5">Rondônia</option>
                      <option value="6">Roraima</option>
                      <option value="7">Tocantins</option>
                    </optgroup>
                    <optgroup label="Nordeste">
                      <option value="8">Alagoas</option>
                      <option value="9">Bahia</option>
                      <option value="10">Ceará</option>
                      <option value="11">Maranhâo</option>
                      <option value="12">Piauí</option>
                      <option value="13">Pernambuco</option>
                      <option value="14">Paraíba</option>
                      <option value="15">Rio Grande do Norte<option>
                      <option value="16">Sergipe</option>
                    </optgroup>
                    <optgroup label="Centro-Oeste">
                      <option value="17">Goiás</option>
                      <option value="18">Mato Grosso</option>
                      <option value="19">Mato Grosso do Sul</option>
                      <option value="20">Distrito Federal</option>
                    </optgroup>
                    <optgroup label="Sudeste">
                      <option value="21">Espirito Santo</option>
                      <option value="22">Minas Gerais</option>
                      <option value="23">Rio de Janeiro</option>
                      <option value="24">São Paulo</option>
                    </optgroup>
                    <optgroup label="Sul">
                      <option value="25">Paraná</option>
                      <option value="26">Rio Grande do Sul</option>
                      <option value="27">Santa Catarina</option>
                    </optgroup>
                    </select>
 
                    <div class="input-grupo">
 
 
                <div class="input-boxi">
                  <label class="gender-inpu" >Cidade:</label>
                  <input class="gender-inpu" id="cidade" type="text" placeholder="Cidade" required>
                </div>
 
                <div class="input-boxi">
                  <label>CEP:</label>
                  <input class="gender-inpu" id="cep" type="text" placeholder="21365-000" required size="15" maxlength="8">
                </div>
               
                <div class="input-boxi">
                  <label>Bairro:</label>
                  <input class="gender-inpu" id="bairro" type="text" placeholder=" Bairro" required>
                </div>
 
                <div class="input-boxi">
                  <label>Rua:</label>
                  <input class="gender-inpu" type="text" size="30" placeholder="Logradouro" required>
                </div>
                 
                <div class="input-boxi">
                  <label>Complemento:</label>
                  <input class="gender-inpu" type="text" size="30" placeholder="Andar, Apartamento,Bloco">
                </div>
                 
                <div class="continue-button">
                    <button><a href="/inicial">Cadastrar</a></button>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>