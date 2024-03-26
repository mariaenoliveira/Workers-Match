<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="{{ asset('cadastro.css') }}">
   
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="image/banner.svg" alt="">
        </div>
        <div class="form">
            <form action="/cadastro">
            <form action="/cadastro2" method="POST">
                @csrf

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
                            <label for="female">Masculino</label>
                        </div>
 
                        <div class="gender-input">
                            <input id="male" type="radio" name="gender" required>
                            <label for="male">Feminino</label>
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
                </div>

                <label class="estado" name="estado">Estado:</label>
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
                      <option value="Acre">Acre</option>
                      <option value="Amazonas">Amazonas</option>
                      <option value="Amapá">Amapá</option>
                      <option value="Pará">Pará</option>
                      <option value="Rondônia">Rondônia</option>
                      <option value="Roraima">Roraima</option>
                      <option value="Tocantins">Tocantins</option>
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
                      <option value="Alagoas">Alagoas</option>
                      <option value="Bahia">Bahia</option>
                      <option value="Ceará">Ceará</option>
                      <option value="Maranhão">Maranhâo</option>
                      <option value="Piauí">Piauí</option>
                      <option value="Pernambuco">Pernambuco</option>
                      <option value="Paraíba">Paraíba</option>
                      <option value="Rio Grande do Norte">Rio Grande do Norte<option>
                      <option value="Sergipe">Sergipe</option>
                    </optgroup>
                    <optgroup label="Centro-Oeste">
                      <option value="17">Goiás</option>
                      <option value="18">Mato Grosso</option>
                      <option value="19">Mato Grosso do Sul</option>
                      <option value="20">Distrito Federal</option>
                      <option value="Goiás">Goiás</option>
                      <option value="Mato Grosso">Mato Grosso</option>
                      <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                      <option value="Distrito Federal">Distrito Federal</option>
                    </optgroup>
                    <optgroup label="Sudeste">
                      <option value="21">Espirito Santo</option>
                      <option value="22">Minas Gerais</option>
                      <option value="23">Rio de Janeiro</option>
                      <option value="24">São Paulo</option>
                      <option value="Espirito Santo">Espirito Santo</option>
                      <option value="Minas Gerais">Minas Gerais</option>
                      <option value="Rio de Janeiro">Rio de Janeiro</option>
                      <option value="São Paulo">São Paulo</option>
                    </optgroup>
                    <optgroup label="Sul">
                      <option value="25">Paraná</option>
                      <option value="26">Rio Grande do Sul</option>
                      <option value="27">Santa Catarina</option>
                      <option value="Paraná">Paraná</option>
                      <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                      <option value="Santa Catarina">Santa Catarina</option>
                    </optgroup>
                    </select>
 
                <div class="input-grupo">

                <div class="input-box">
                  <label class="gender-inpu" >Cidade</label>
                  <input class="gender-inpu" id="cidade" type="text" name="cidade" placeholder="Cidade" required>
                </div>
 
                <div class="input-box">
                  <label>CEP</label>
                  <input class="gender-inpu" id="cep" type="text" name="cep" placeholder="21365-000" required size="15" maxlength="8">
                </div>
               
                <div class="input-box">
                  <label>Bairro</label>
                  <input class="gender-inpu" id="bairro" type="text" name="bairro" placeholder=" Bairro" required>
                </div>
 
                <div class="input-box">
                  <label>Rua</label>
                  <input class="gender-inpu" type="text" name="rua" size="20" placeholder="Nome da rua" required>
                </div>

                <div class="input-box">
                    <label>Numero</label>
                    <input class="gender-inpu" type="text"  name="numero" placeholder="Numero" size="15" maxlength="8">
                  </div> 
                 
                <div class="input-box">
                  <label>Complemento</label>
                  <input class="gender-inpu" type="text" name="complemento" size="25" placeholder="Andar, Apartamento, Bloco">
                </div>
                 
                <div class="continue-button">
                    <button type="submit"><a href="/inicial">Cadastrar</a></button>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>