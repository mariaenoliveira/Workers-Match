<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="cadastro.css">

</head>

<body>
    <div class="card">
        <div class="card-content">
            <div class="content ">
                <h1 class="title is-1">Cadastro de candidatos </h1>
                <div class="dadospessoais">
                    <h2>Dados Pessoais:</h2>
                    <div class="nomesobre">
                        <div class=" nome field flex-row justify-content-between">
                            <input class="input" type="name" placeholder="Nome completo">
                          
                        </div>
                    </div>
                    <div class=" nome field flex-row justify-content-between">
                        <input class="input" type="text" placeholder="CPF">
                    </div>

                    <div class="nome control has-icons-left has-icons-right">
                        <input class="input" type="email" placeholder="Email">
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                    <input class="nome input is-info" type="tel" placeholder="Telefone">
                    <input class=" nome input is-info" type="text" placeholder="Endereço">
                    <input class=" nome input is-info" type="text" placeholder="CEP">
                    <input class=" nome input is-info" type="text" placeholder="Número">
                    <input class=" nome input is-info" type="text" placeholder="Cidade">
                    <input class="nome input is-info" type="text" placeholder="Estado">
                    <div class=" nome nascimento field  flex-row justify-content-between ">
                        <input class="input" type="date" placeholder="Data de Nascimento">
                    </div>
                    <div class="field">
                        <div class="Sexo">
                            <h5>Sexo:</h5>
                            <select>
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
                    <div class="field">
                        <div class="Grupo etnico">
                            <h5>Grupo Étnico: </h5>
                            <select>
                                <option>Branco(a)</option>
                                <option>Preto(a)</option>
                                <option>Pardo(a)</option>
                                <option>Amarelo(a)</option>
                                <option>indiginas</option>
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <div class="Estado Civil">
                        <h5>Estado Civil:</h5>
                            <select>
                                <option>Solteiro(a)</option>
                                <option>Casado(a)</option>
                                <option>Divorciado(a)</option>
                                <option>Viúvo(a)</option>
                            </select>
                        </div>
                    </div>
                </div>    
                <div class= cargos></div>
                   <h2>Certificações e Disponibilidades:</h2>
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
                            <h5>Pode trabalhar nos finais de semana?</h5>
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
                          <h5>Pode trabalhar nos feriados?</h5>
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
                         <h5>Pode trabalhar á noite?</h5>
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
                               Buscar arquivo
                            </span>
                        </label>
                    </div>
                </div>
                <div class="termos">
                    <label class="Termos e Condições">
                        <input type="checkbox">
                        Ao clicar em "Enviar", declaro que todas as informações fornecidas à minha candidatura de
                        emprego estão corretas tanto quanto é do meu conhecimento e concedo a Instituição Workers Match a
                        autorização para contatar as minhas referências e efetuar uma verificação de antecedentes criminais.
                        A Instituição Workers Match , uma organização sem fins lucrativos, não discrimina com base na raça, cor,
                        origem nacionalidade, sexo, idade, religião, sexualidade, ou deficiência na admissão/acesso, ou atendimento/emprego nos seus programas e atividades.
                    </label>
                    <div class="botao">
                    <button class="button">Cadastrar</button>
                    </div>
                </div>
                
            </div>
            <footer>
            2024 <small>&copy;</small> Workers Match - Todos os Direitos Reservados 
        </footer>
        </div>
</body>
</html>