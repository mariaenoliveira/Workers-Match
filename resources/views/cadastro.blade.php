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
            <img src="image/azul.jpg" alt="">
        </div>
        <div class="form">
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
                        <input id="firstname" type="text" name="nome" placeholder="Digite seu primeiro nome">
                    </div>
 
                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="sobrenome" placeholder="Digite seu sobrenome">
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail">
                    </div>
 
                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="telefone" placeholder="(xx) xxxx-xxxx" >
                    </div>
 
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha">
                    </div>
 
 
                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="senha" placeholder="Digite sua senha novamente">
                    </div>
 
                </div>
 
                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>
 
                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="genero" value="Feminino">
                            <label for="female">Feminino</label>
                        </div>
 
                        <div class="gender-input">
                            <input id="male" type="radio" name="genero" value="Masculino">
                            <label for="male">Masculino</label>
                        </div>
 
                        <div class="gender-input">
                            <input id="others" type="radio" name="genero" value="Outros">
                            <label for="others">Outros</label>
                        </div>
 
                        <div class="gender-input">
                            <input id="none" type="radio" name="genero" value="Prefiro Não Dizer">
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
                <label class="estado" name="estado">Estado:</label>
                  <select name="estado" id="uf">
                    <option value="0">Escolha sua Região</option>
                    <optgroup label="Norte">
                      <option value="Acre">Acre</option>
                      <option value="Amazonas">Amazonas</option>
                      <option value="Amapá">Amapá</option>
                      <option value="Pará">Pará</option>
                      <option value="Rondônia">Rondônia</option>
                      <option value="Roraima">Roraima</option>
                      <option value="Tocantins">Tocantins</option>
                    </optgroup>
                    <optgroup label="Nordeste">
                      <option value="Alagoas">Alagoas</option>
                      <option value="Bahia">Bahia</option>
                      <option value="Ceará">Ceará</option>
                      <option value="Maranhão">Maranhâo</option>
                      <option value="Piauí">Piauí</option>
                      <option value="Pernambuco">Pernambuco</option>
                      <option value="Paraíba">Paraíba</option>
                      <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                      <option value="Sergipe">Sergipe</option>
                    </optgroup>
                    <optgroup label="Centro-Oeste">
                      <option value="Goiás">Goiás</option>
                      <option value="Mato Grosso">Mato Grosso</option>
                      <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                      <option value="Distrito Federal">Distrito Federal</option>
                    </optgroup>
                    <optgroup label="Sudeste">
                      <option value="Espirito Santo">Espirito Santo</option>
                      <option value="Minas Gerais">Minas Gerais</option>
                      <option value="Rio de Janeiro">Rio de Janeiro</option>
                      <option value="São Paulo">São Paulo</option>
                    </optgroup>
                    <optgroup label="Sul">
                      <option value="Paraná">Paraná</option>
                      <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                      <option value="Santa Catarina">Santa Catarina</option>
                    </optgroup>
                    </select>
 
                    <div class="input-grupo">
 
 
                <div class="input-boxi">
                  <label class="gender-inpu">Cidade:</label>
                  <input class="gender-inpu" id="cidade" type="text" name="cidade" placeholder="Cidade">
                </div>
 
                <div class="input-boxi">
                  <label>CEP:</label>
                  <input class="gender-inpu" id="cep" type="text" name="cep" placeholder="21365-000"size="15" maxlength="8">
                </div>
               
                <div class="input-boxi">
                  <label>Bairro:</label>
                  <input class="gender-inpu" id="bairro" name="bairro" type="text" placeholder=" Bairro">
                </div>
 
                <div class="input-boxi">
                  <label>Rua:</label>
                  <input class="gender-inpu" type="text" name="rua" placeholder="Logradouro">
                </div>

                <div class="input-boxi">
                    <label>Numero:</label>
                    <input class="gender-inpu" type="text"  name="numero" placeholder="Numero" size="15" maxlength="8">
                  </div>
                 
                <div class="input-boxi">
                  <label>Complemento:</label>
                  <input class="gender-inpu" type="text" name="complemento" placeholder="Andar, Apartamento,Bloco">
                </div>
                 
                <div class="continue-button">
                    <button type="submit">Cadastrar</button>
                    
                </div>
            </div>
            </form>
        </div>
    </div>
    <footer>
        Todos os direitos reservados
    </footer>
</body>
</html>