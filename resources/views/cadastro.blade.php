<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="login.css">

</head>

<body>
    <div class="columns d-flex">
        <div class="column is-four-fifths">
            <div class="card">
                <div class="field">
                    <div class=" logo d-flex flex-row justify-content-end d-md-block ">
                        <figure class="image is-128x128">
                            <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                          </figure>
                    </div>
                    <div class="card-content">
                        <h1 class="title  is-2 ">Cadastre-se</h1>
                        <div class="nomesobre">
                            <div class=" nome field flex-row justify-content-between">
                                <input class="input" type="name" placeholder="Nome">
                            </div>
                            <div class=" sobrenome form-floating col-5 mb-3 col-md-6 cpf ">
                                <input class="input" type="name" placeholder="Sobrenome">
                            </div>
                        </div>
                        <div class="datacpf">
                            <div class=" nascimento field  flex-row justify-content-between ">
                                <input class="input" type="date" placeholder="Data de Nascimento">
                            </div>
                            <div class=" cpf form-floating  form-floating col-5 mb-3 col-md-6 cpf">
                                <input class="input" type="text" placeholder="CPF">
                            </div>
                        </div>
                        <div class="cepen">
                            <div class=" cep field flex-row justify-content-between">
                                <input class="input" type="text" placeholder="CEP">
                            </div>
                            <div class=" endereco form-floating  form-floating col-5 mb-3 col-md-6 cpf">
                                <input class="input" type="text" placeholder="Endereço">
                            </div>
                        </div>
                        <div class="field">
                            <div class="select">
                                <select>
                                    <option>Tipo Endereço</option>
                                    <option>Principal</option>
                                    <option>Comercial</option>
                                    <option>Outro</option>
                                </select>
                            </div>
                        </div>

                        <div class="complenumero">
                            <div class=" numero field flex-row justify-content-between">
                                <input class="input" type="text" placeholder="Número">
                            </div>
                            <div class=" complemento field flex-row justify-content-between">
                                <input class="input" type="text" placeholder="Complemento">
                            </div>
                        </div>
                         <div class="field">
                        <label class="label">Cargos</label>
                        <div class="control">
                            <div class="select">
                            <select>
                                <option>Cargos de interesse</option>
                                <option>Técnicos</option>
                                <option>Operacionais</option>
                                <option>Supervisão</option>
                                <option>Gerência</option>
                                <option>Diretoria</option>
                            </select>
                            </div>
                        </div>
                        </div>

                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="email" placeholder="Email">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" type="password" placeholder="Senha">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" type="password" placeholder="Repita a senha">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </p>
                        </div>
                        <div class="buttons">
                            <button class="button is-success">Cadastar</button>

                        </div>
                        <div class="buttons">
                            <button class="button">Esqueci a senha</button>

                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="content has-text-centered">
                  <p>
                    <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                    <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                    is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
                  </p>
                </div>
              </footer>
            <script src="https://kit.fontawesome.com/8eb106bf5e.js" crossorigin="anonymous"></script>

</body>
</html>