<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"><!--CSS do Bootstrap-->
        <link rel="shortcut icon" href="img/android-chrome-192x192.png" type="image/x-icon">
        <title>Marcar visita</title>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="css/estilo.css">
        <script type='text/javascript' src='//code.jquery.com/jquery-compat-git.js'></script>
        <script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>
    </head>
    
    <body style="background-color: #f9de2d;">
        <!-- Nav -->
        <?php include './includes/navbar.php'?>
        <div class="container">
        <!--Formulário-->
            <div class="container mt-5" style="background-color: rgba(0, 0, 0, 0.185);color: white;border-radius: 15px;">
                <div class="card" style="background-color: rgba(0, 0, 0, 0.3);border: 4px solid dodgerblue;border-radius: 10px;">
                    <div class="card-header" style="text-align: center;background-color: dodgerblue;">
                        <legend><b>Marcar visita</b></legend>
                    </div>
                    <div class="card-body" style="background-color: rgba(0, 0, 0, 0.6);color: white;border: 2px solid rgba(0, 0, 0, 0);border-radius: 3px;">
                        <form action="https://formsubmit.co/chapatodosj@gmail.com" method="POST">
                            <fieldset> 
                                <br>
                                <br>
                                <p>
                                    <label>
                                        Nome:<br>
                                        <div>
                                            <input type="text" name="nome" id="nome" class="input" required>
                                        </div>
                                    </label>
                                </p>
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <p>
                                            <label>
                                                Telefone:<br>
                                                <div>
                                                    <input type="text" name="Telefone" id="nome" class="phone"required/>
                                                </div>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p>
                                            <label>
                                                Data:<br>
                                                <div>
                                                    <input type="date" name="Data" class="input" value="">
                                                </div>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p>
                                            <label>
                                                Horário:<br>
                                                <div>
                                                    <input type="time" name="Hora" class="input" value="">
                                                </div>
                                            </label>
                                        </p>
                                    </div>
                                </div>
                                <div class="inputBox">
                                    <label for="inputState" class="form-label">
                                        Tipo de evento:
                                    </label>
                                    <select id="inputState" class="input" name="Turma">
                                        <option selected disabled>Selecione</option>
                                        <option>Aniversário</option>
                                        <option>Casamento</option>
                                        <option>Chá de Revelação</option>
                                        <option>Chá de Panela</option>
                                        <option>Encontro Religioso</option>
                                        <option>Feijoada</option>
                                        <option>Bazzar</option>
                                        <option>Outros...</option>
                                    </select>
                                    <br>
                                </div>
                                <br>
                                <label for="message"><b>Se quiser fazer algum comentario:</b></label>
                                <br>
                                <textarea name="Messagem" id="message" class="input" style="width: 100%;"></textarea>
                                <input type="hidden" name="_captcha" value="false" />
                                <input type="hidden"name="_next" value="https://todosjuntosjaa.github.io/EspacoMix/mvisita.html"/>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <br>
                                    <input type="submit" class="submit">
                            </fieldset>
                        </form>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <!--Termino do Formulário-->

        <!--Script-->
        <script>
            var behavior = function (val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            }
            options = {
                onKeyPress: function (val, e, field, options) {
                    field.mask(behavior.apply({}, arguments), options);
                }
            };
            $('.phone').mask(behavior, options);
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!--Termino do script-->
    </body>
</html>