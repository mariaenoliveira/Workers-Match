<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Cadastro de candidatos</title>
</head>
<body>
            <div class="card">
                    <div class= "conteudo">
                        <header class=" cadastro title is-1">Cadastro de candidatos </header>
                        <div class="dadospessoais">
                            <h5>Dados Pessoais:</h5>
                            <div class="nomesobre">
                                <div class=" nome field flex-row justify-content-between">
                                    <input class="input" type="name" placeholder="Nome" required>
                                </div>
                                <div class=" sobrenome field flex-row justify-content-between">
                                <input class="input" type="text" placeholder="Sobrenome" required>
                                </div>
                            </div>
                            <div class="nomesobre">
                            <div class=" nome field flex-row justify-content-between">
                                <input class="input" type="text" placeholder="CPF" required>
                                </div>
                                <div class="sobrenome control has-icons-left has-icons-right">
                                    <input class="input" type="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="telend">
                              <input class="nome input is-info" type="tel" placeholder="Telefone" required>
                               <input class=" sobrenome input is-info" type="text" placeholder="Endereço" required>
                            </div>
                            <div class="cepnu">
                                <input class=" nome input is-info" type="text" placeholder="CEP" required>
                                <input class=" sobrenome input is-info" type="text" placeholder="Número" required>
                            </div>
                            <div class="cepnu">
                                <input class=" nome input is-info" type="text" placeholder="Cidade" required>
                                <input class="sobrenome input is-info" type="text" placeholder="Estado" required>
                            </div>
                            <div class="datase">
                                <div class=" nome field  flex-row justify-content-between ">
                                    
                                    <input class="input" type="date" placeholder="Data de Nascimento" required>
                                </div>
                                <div class="sobrenome">
                                    <div class="select">
                                        <select>
                                           <h5>Sexo: </h5>
                                            <option></option>
                                            <option>Masculino</option>
                                            <option>Feminino</option>
                                            <option>Transgênero</option>
                                            <option>Gênero neutro</option>
                                            <option>Não-binário</option>
                                            <option>Agênero</option>
                                            <option>Outro</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="select"> 
                                <div class="Grupo etnico">
                                <h5>Grupo étinico</h5>
                                    <select>
                                        <option></option>
                                        <option>Branco(a)</option>
                                        <option>Preto(a)</option>
                                        <option>Pardo(a)</option>
                                        <option>Amarelo(a)</option>
                                        <option>indiginas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="select">
                                <div class="Estado Civil">
                                <h5>Estado Civil</h5>
                                    <select>
                                        <option></option>
                                        <option>Solteiro(a)</option>
                                        <option>Casado(a)</option>
                                        <option>Divorciado(a)</option>
                                        <option>Viúvo(a)</option>
                                    </select>
                                </div>
                            </div>
                        </div>    
                        <div class=cargos>
                            <div class="certificacoes has-fixed-size">
                                <h>Certificações:</h5>
                                <textarea class="textarea" placeholder="Escreva aqui sua certificações"></textarea>
                            </div>
                            <div class="idiomas">
                            <h5>Idiomas em que sou fluente:</h5>
                                <div class="checkboxs">
                                <label class=" Inglês">
                                    <input type="checkbox">
                                        Inglês
                                    </label>
                                    <label class=" Espanhol">
                                    <input type="checkbox">
                                        Espanhol
                                    </label>
                                    <label class="Alemão">
                                    <input type="checkbox">
                                        Alemão
                                    </label>
                                    <label class="Francês">
                                    <input type="checkbox">
                                        Francês
                                    </label>
                                    <label class=" Outro">
                                    <input type="checkbox">
                                        Outro
                                    </label>
                                </div>
                            </div>
                            <div class="disponibilidades">
                                <h5>Disponibilidades:</h5>
                                <div class="control">
                                    <h4>Pode trabalhar nos finais de semana?</h4>
                                    <label class="semana">
                                        <input type="radio" name="final de semana">
                                        Sim
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="final de semana">
                                        Não
                                    </label>
                                </div>
                                <div class="control">
                                <h4>Pode trabalhar nos feriados?</h4>
                                    <label class="radio">
                                        <input type="radio" name="feriado">
                                        Sim
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="feriado">
                                        Nâo
                                    </label>
                                </div>
                                <div class="control">
                                <h4>Pode trabalhar á noite?</h4>
                                    <label class="radio">
                                        <input type="radio" name="final">
                                        Sim
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="final">
                                        Nâo
                                    </label>
                                </div>
                            </div>
                         </div>
                            
                            <div class="cartadeApresentação">
                                <h4>Carta de Apresentação: </h4>
                                <textarea class="textarea has-fixed-size" placeholder="Nos conte mais sobre você:"></textarea>
                            </div>
                            <div class="curriculo">
                                <label class="file-label">
                                    <input class="file-input" type="file" name="resume">
                                    <span class="file-cta">
                                        <span class="file-icon">
                                            <i class="fas fa-upload"></i>
                                        </span>
                                        <span class="file-label">
                                            Anexe aqui o seu currículo
                                        </span>
                                    </span>
                                    <span class="file-name">
                                    Screen Shot 2017-07-29 at 15.54.25.png
                                    </span>
                                </label>
                            </div>
                        <div class="termos">
                            <label class="Termos e Condições">
                                <input type="checkbox">
                                Ao clicar em "Enviar", declaro que todas as informações fornecidas à minha candidatura de
                                emprego estão corretas tanto quanto é do meu conhecimento e concedo a Instituição Workers Match a
                                autorização para contatar as minhas referências e efetuar uma verificação de antecedentes criminais.
                                A Instituição Workers Match , uma organização sem fins lucrativos, não discrimina com base na raça, cor,
                                origem nacionalidade, sexo, idade, religião, sexualidade, ou deficiência na admissão/acesso, ou atendimento/emprego nos seus programas e atividades.
                                <a href="Termos e Condições">Termos e Condições</a>
                            </label>
                        </div>
                        <div class="botao">
                            <button class="button">Cadastrar</button>
                        </div>
                    </div>
                
            </div>
        <footer class="footers">
        <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>Empresa</h4>
                <ul>
                    <li><a href="#">Negócios</a></li>
                    <li><a href="#">Parcerias</a></li>
                    <li><a href="/inicial/Privacidade">Política de Privacidade</a></li>
                    <li><a href="#">Termos e Condições</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contato</h4>
                <ul>
                    <li><a href="/inicial/contato">Contate-nos</a></li>
                    <li><a href="/inicial/PerguntasFrequentes">Perguntas Frequentes</a></li>                   
                </ul>
            </div>
           
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="https://twitter.com/elonmusk"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                </svg></a>
                                    <a href="https://www.instagram.com/duda.rubert/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                </svg></a>
                                    <a href="https://www.facebook.com/zuck/?locale=pt_BR"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg></a>
            </div>        
        </footer>
        <div class="copyright">
                Copyright © 2023 Workers Match. Todos os direitos reservados.
            </div>
            </div>
        </div>   
    </body>
</html>