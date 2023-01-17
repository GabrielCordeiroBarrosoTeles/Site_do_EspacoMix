  <!-- 
    =========================================================================
    Nome do Projeto: Carrinho de Compras em Javascript
    Finalidade: Cursos de Informática do IFSP campus Caraguatatuba 
    Fonte Base: Projetos do Curso B7Web - https://b7web.com.br/ 
    Autor: Denny Paulista Azevedo Filho
    License: MIT License
    ========================================================================= 
  -->

  <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Orçamento</title>
    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Hepta+Slab:400,700|Lato:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        

* {
    box-sizing: border-box;
}

body {
    background-color:#EEE;
    font-family:'Lato',Helvetica,Arial;
    font-size:15px;
    display:flex;
    margin:0;
    min-height:100vh;
}

.models {
    display:none;
}

header {
    position: fixed;
    left:0;
    top:0;
    right:0;
    height:60px;
    background-color:#399ade;
    display:none;
    justify-content: flex-end;
    align-items: center;
}

.menu-openner {
    margin-right: 15px;
    font-size: 26px;
    background-color: #a9dcff;
    padding: 5px 20px;
    border-radius: 5px;
}

.menu-openner span {
    margin-right:10px;
}

.menu-closer {
    width:32px;
    height:32px;
    display:none;
    font-size: 30px;
}

aside {
    background-color:#9ccbe6;
    width:0vw;
    font-family:'Hepta Slab', Helvetica, Arial;
    transition:all ease .2s;
    overflow-x:hidden;
}

aside.show {
    width:30vw;
}

.cart--area {
    padding:20px;
}

main {
    flex:1;
    padding:20px;
}

h1 {
    font-family:'Hepta Slab', Helvetica, Arial;
}

.models-area {
    display:grid;
    grid-template-columns: repeat(3, 1fr);
}

.models-item {
    text-align: center;
    max-width:250px;
    font-family:'Hepta Slab', Helvetica, Arial;
    margin:0 auto 50px auto;
}

.models-item a {
    display:flex;
    flex-direction: column;
    align-items:center;
    text-decoration: none;
}

.models-item--img {
    width:200px;
    height:200px;
    background-color:#EEE;
    border-radius:20px;
    box-shadow:0px 10px 50px rgba(0, 0, 0, 0.2);
}

.models-item--img img {
    width:100%;
    height:auto;
    border-radius:20px;
}

.models-item--add {
    width:50px;
    height:50px;
    line-height:50px;
    border-radius:25px;
    background-color:#388bc5;
    text-align:center;
    color:#FFF;
    font-size:22px;
    cursor:pointer;
    margin-top:-25px;
    transition:all ease .2s;
}

.models-item a:hover .models-item--add {
    background-color:#244c88;
}

.models-item--price {
    font-size:15px;
    color:#333;
    margin-top:5px;
}

.models-item--name {
    font-size:20px;
    font-weight: bold;
    color:#000;
    margin-top:5px;
}

.models-item--desc {
    font-size:13px;
    color:#555;
    margin-top:10px;
}

.modelsWindowArea {
    position:fixed;
    left:0;
    top:0;
    bottom:0;
    right:0;
    background-color:rgba(255, 255, 255, 0.5);
    display:none;
    transition: all ease .5s;
    justify-content: center;
    align-items: center;
    overflow-y:auto;
}

.modelsWindowBody {
    width:900px;
    background-color:#FFF;
    border-radius:10px;
    box-shadow:0px 0px 15px #999;
    display:flex;
    margin:20px 0px;
}

.modelsBig {
    flex:1;
    display:flex;
    justify-content: center;
    align-items: center;
}

.modelsBig--back {
    position:absolute;
    width:30px;
    height:30px;
    background-color:#000;
}

.modelsBig img {
    height:400px;
    width:auto;
}

.modelsInfo {
    flex:1;
    font-family:'Hepta Slab', Helvetica, Arial;
    padding-bottom:50px;
}

.modelsInfo h1 {
    margin-top:50px;
}

.modelsInfo .modelsInfo--desc {
    font-size:15px;
    color:#999;
    margin-top:10px;
    font-family:'Lato',Helvetica,Arial;
}

.modelsInfo--sector {
    color:#CCC;
    text-transform: uppercase;
    font-size:14px;
    margin-top:30px;
    margin-bottom:10px;
}



.modelsInfo--price {
    display:flex;
    align-items:center;
}

.modelsInfo--actualPrice {
    font-size:28px;
    margin-right:30px;
}

.modelsInfo--qtarea {
    display:inline-flex;
    background-color:#EEE;
    border-radius:10px;
    height:30px;
}

.modelsInfo--qtarea button {
    border:0;
    background-color:transparent;
    font-size:17px;
    outline:0;
    cursor:pointer;
    padding:0px 10px;
    color:#333;
}

.modelsInfo--qt {
    line-height: 30px;
    font-size: 12px;
    font-weight: bold;
    padding: 0px 5px;
    color:#000;
}

.modelsInfo--addButton {
    margin-top:30px;
    padding:20px 30px;
    border-radius:20px;
    background-color:#48d05f;
    color:#FFF;
    display:inline-block;
    cursor:pointer;
    margin-right:30px;
}

.modelsInfo--addButton:hover {
    background-color:#32a345;
}

.modelsInfo--cancelButton {
    display:inline-block;
    cursor:pointer;
}

.modelsInfo--cancelMobileButton {
    display:none;
    height:40px;
    text-align:center;
    line-height: 40px;
    margin-bottom:30px;
}

.cart {
    margin-bottom:20px;
}

.cart--item {
    display:flex;
    align-items:center;
    margin:10px 0;
}

.cart--item img {
    width:40px;
    height:40px;
    margin-right:20px;
}

.cart--item-nome {
    flex:1;
}

.cart--item--qtarea {
    display:inline-flex;
    background-color:#EEE;
    border-radius:10px;
    height:30px;
}

.cart--item--qtarea button {
    border:0;
    background-color:transparent;
    font-size:17px;
    outline:0;
    cursor:pointer;
    padding:0px 10px;
    color:#333;
}

.cart--item--qt {
    line-height: 30px;
    font-size: 12px;
    font-weight: bold;
    padding: 0px 5px;
    color:#000;
}

.cart--totalitem {
    padding:15px 0;
    border-top:1px solid #79b9dd;
    color:#315970;
    display:flex;
    justify-content: space-between;
    font-size:15px;
}

.cart--totalitem span:first-child {
    font-weight: bold;
}

.cart--totalitem.big {
    font-size:20px;
    color:#000;
    font-weight: bold;
}

.cart--finalizar {
    padding:20px 30px;
    border-radius:20px;
    background-color:#48d05f;
    color:#FFF;
    cursor:pointer;
    text-align:center;
    margin-top:20px;
    border:2px solid #63f77c;
    transition: all ease .2s;
}

.cart--finalizar:hover {
    background-color:#35af4a;
}

@media (max-width:1000px) {
  
    .models-area {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width:840px) {
 
    body {
        flex-direction: column;
    }

    .models-area {
        display:block;
    }

    .models-item {
        max-width:100%;
    }

    header {
        display:flex;
    }

    main {
        padding-top:60px;
    }

    aside {
        width:auto;
        position:fixed;
        left:100vw;
        right:0;
        top:0;
        bottom:0;
        transition: all ease .2s;
    }

    aside.show {
        width:auto;
    }

    .cart--area {
        width:100vw;
    }

    .menu-closer {
        display:block;
    }

    .modelsWindowArea {
        justify-content:flex-start;
        align-items: flex-start;
    }

    .modelsWindowBody {
        width:100vw;
        display:block;
        padding:20px;
        border-radius:0;
        box-shadow:none;
        margin:0;
    }

    .modelsBig img {
        width: 75%;
        height: auto;
    }

    .modelsInfo h1 {
        margin-top:20px;
    }

    .modelsInfo--qtarea {
        height: 60px;
    }

    .modelsInfo--qtarea button {
        font-size: 25px;
        padding: 0px 25px;
    }

    .modelsInfo--qt {
        line-height: 60px;
        font-size: 20px;
    }

    .modelsInfo--addButton {
        font-size: 20px;
        display: block;
        text-align: center;
        margin: 30px auto;
    }

    .modelsInfo--cancelButton {
        display:none;
    }

    .modelsInfo--cancelMobileButton {
        display:block;
    }
}
    </style>
</head>
<body>
    
    <!-- Modelos para clonagem e inclusão na área de exibição -->
    <div class="models">
        <div class="models-item">
            <a href="">
                <div class="models-item--img"><img src="" /></div>
                <div class="models-item--add">+</div>
            </a>
            <div class="models-item--price">R$ --</div>
            <div class="models-item--name">--</div>
            <div class="models-item--desc">--</div>
        </div>
        <div class="cart--item">
            <img src="" />
            <div class="cart--item-nome">--</div>
            <div class="cart--item--qtarea">
                <button class="cart--item-qtmenos">-</button>
                <div class="cart--item--qt">1</div>
                <button class="cart--item-qtmais">+</button>
            </div>
        </div>
    </div>
    <header style="position: absolute;">
        
        <div class="menu-openner">
            <span>0</span>
            <span class="material-icons">shopping_cart</span>
        </div>
    </header>
    <main>
        <div class="menu-btn" id="menu">
    <i class="fas fa-bars fa-2x"></i>
  </div>
  <div class="menu-btn" id="menu">
    <i class="fas fa-bars fa-2x"></i>
  </div>
  <nav class="navbar navbar-expand-lg" id='antes'>
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="font-family: Blippo, fantasy;font-size: xx-large;">Espaço Mix </a>
        <button onclick="botaoo" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" style="color:#000;"aria-current="page" href="index.php#menu">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:#000;" href="agendamento.php">Agendamento</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:#000;" href="index.php#orcamento">Orçamento</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:#000;" href="index.php#eventos">Eventos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" style="color:#000;" data-bs-toggle="dropdown" aria-expanded="false">
                Espaço
              </a>
              <ul class="dropdown-menu" style="color:#000;">
                <li><a class="dropdown-item" href="index.php#montese">Montese</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="index.php#parangaba">Parangaba</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:#000;" href="index.php#contato">Contato</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
          </form>
        </div>
      </div>
    </nav>
        <div class="models-area"></div>
    </main>
    <aside>
        <div class="cart--area">
            <div class="menu-closer">
                <span class="material-icons">close</span>
            </div>
            
            <h1>Seus Orçamento</h1>
            <div class="cart"></div>
            <div class="cart--details">
                
           <div class="cart--totalitem subtotal">
                    <span>OBS: No valor do aluguel está incluso 10 conjuntos de mesas, se precisar de mais algum conjunto alugo a R$ 5,00 o conjunto.</span> 
                </div>
                <div class="cart--totalitem total big">
                    <span>Total</span>
                    <span>R$ --</span>
                </div>
                <a href="https://wa.me/qr/D5Z5M43METFVG1" style="text-decoration: none;"><div class="cart--finalizar">Entrar em contato pelo zap!</div></a>
            </div>
        </div>
    </aside>
    <div class="modelsWindowArea">
        <div class="modelsWindowBody">
            <!-- 
                Este botão é o cancelar do mobile (mostrar com F12) a ação do cancelar
                da janela modal vai ser igual, logo vamos fazer uma função
            -->
            <div class="modelsInfo--cancelMobileButton">Voltar</div>
            <div class="modelsBig">
                <img src="" />
            </div>
            <div class="modelsInfo">
                <h1>--</h1>
                <div class="modelsInfo--desc">--</div>
                <div class="modelsInfo--sizearea">
                    <div class="modelsInfo--sector"></div>
                    <div class="modelsInfo--sizes">
                        <div data-key="0" class="modelsInfo--size"><span>--</span></div>
                        <div data-key="1" class="modelsInfo--size"><span>--</span></div>
                        <div data-key="2" class="modelsInfo--size selected"><span>--</span></div>
                    </div>
                </div>
                <div class="modelsInfo--pricearea">
                    <div class="modelsInfo--sector">Preço</div>
                    <div class="modelsInfo--price">
                        <div class="modelsInfo--actualPrice">R$ --</div>
                        <div class="modelsInfo--qtarea">
                            <button class="modelsInfo--qtmenos">-</button>
                            <div class="modelsInfo--qt">1</div>
                            <button class="modelsInfo--qtmais">+</button>
                        </div>
                    </div>
                </div>
                <div class="modelsInfo--addButton">Adicionar ao carrinho</div>
                <div class="modelsInfo--cancelButton">Cancelar</div>
            </div>
        </div>
    </div>

    <script>



let modelsJson = [
  {
      id:1, name:'Aluguel do Espaço',
       img:'img/tete.png',
        price:[380.00, 380.00, 380.00],
        sizes:['', '', ''],
          description:''
      },
  {
      id:2,
       name:'Conj. Mesas',
        img:'img/conjmesas.png',
         price:[5.00, 5.00, 5.00],
         sizes:['', '', ''],
           description:''
          }
];
let cart = [];
let modalQt = 0;
let key = 0;
//constante para carregar estrutura, limpando o código
const c = (el)=>document.querySelector(el); //para localizar o primeiro item
const cs = (el)=>document.querySelectorAll(el); //para localizar todos os itens

//Vamos mapear nossos dados recebidos via Json
//Criando a lista de produtos, modelos
modelsJson.map((item, index)=>{
    //Vamos pegar a estrutura HTML que tem a class 'models-item', 
    //dentro da class 'models' e clonar - true indica para pegar subitens
    //let modelsItem = document.querySelector('.models .models-item').cloneNode(true);
    //Depois de ajustado com a constante
    let modelsItem = c('.models .models-item').cloneNode(true);
    // preenchendo as informações dos modelos
    //acrescentar um identificador para a pizza - FrontEnd
    modelsItem.setAttribute('data-key', index);
    modelsItem.querySelector('.models-item--img img').src= item.img;
    modelsItem.querySelector('.models-item--price').innerHTML = `R$ ${item.price[0].toFixed(2)}`;
    //iniciar pelo nome -- o mais simples
    modelsItem.querySelector('.models-item--name').innerHTML = item.name;
    modelsItem.querySelector('.models-item--desc').innerHTML = item.description;
    //Adicionar o evento de click ao tag <a> que temos envolvendo a imagem e o "+"
    //Vai abrir o Modal - Janela
    modelsItem.querySelector('a').addEventListener('click', (e)=>{
        e.preventDefault(); //Previne a ação padrão que iria atualizar a tela
        //let key = e.target.closest('.models-item').getAttribute('data-key'); //pegando informação do identificador
        //Transforma a variável key em global.
        key = e.target.closest('.models-item').getAttribute('data-key'); //pegando informação do identificador
        modalQt = 1;
        //Alimentando os dados do Modal
        c('.modelsBig img').src = modelsJson[key].img;
        c('.modelsInfo h1').innerHTML = modelsJson[key].name;
        c('.modelsInfo--desc').innerHTML = modelsJson[key].description;
        //c('.modelsInfo--actualPrice').innerHTML = `R$ ${modelsJson[key].price[0].toFixed(2)}`;
        c('.modelsInfo--size.selected').classList.remove('selected');
        cs('.modelsInfo--size').forEach((size, sizeIndex)=>{
            if(sizeIndex == 2) {
                size.classList.add('selected');
                c('.modelsInfo--actualPrice').innerHTML = `R$ ${modelsJson[key].price[sizeIndex].toFixed(2)}`;
            }
            //size.innerHTML = modelsJson[key].sizes[sizeIndex];
            size.querySelector('span').innerHTML = modelsJson[key].sizes[sizeIndex];
        });
        c('.modelsInfo--qt').innerHTML = modalQt;
        //Mostrar a janela Modal
        c('.modelsWindowArea').style.opacity = 0; //criando uma animação
        //corrigir, faltou o "a" do opacity - Valeu Gilberto dos Santos.
        c('.modelsWindowArea').style.display = 'flex';
        setTimeout(()=> {
            c('.modelsWindowArea').style.opacity = 1; //mostrando a janela, sem Timeout, não vemos o efeito
        }, 200);
    });

    //preenchendo as informações no site
    //Depois de ajustado com a constante
    //document.querySelector('.models-area').append(modelsItem);
    c('.models-area').append(modelsItem);
});

//Ações do Modal - janela
function closeModal(){
    c('.modelsWindowArea').style.opacity = 0; //criando uma animação
    setTimeout(()=> {
        c('.modelsWindowArea').style.display = 'none'; //fechando a janela, sem Timeout, não vemos o efeito
    }, 500);
    //mostrar o funcionamento via console do navegador, antes de atribuir aos botões
}

cs('.modelsInfo--cancelButton, .modelsInfo--cancelMobileButton').forEach((item)=>{
    item.addEventListener('click', closeModal);
});

c('.modelsInfo--qtmenos').addEventListener('click', ()=>{
    if(modalQt > 1) {
        modalQt--;
        c('.modelsInfo--qt').innerHTML = modalQt;
    }
});

c('.modelsInfo--qtmais').addEventListener('click', ()=>{
    if(( c('.modelsInfo h1').innerHTML =='Aluguel do Espaço')&&(modalQt>=1)){

}else{
modalQt++
}
    c('.modelsInfo--qt').innerHTML = modalQt;
});

cs('.modelsInfo--size').forEach((size, sizeIndex)=>{
    size.addEventListener('click', (e)=> {
        c('.modelsInfo--size.selected').classList.remove('selected');
        //e.target.classList.add('selected'); //ocorre erro se clicar no <span></span>
        size.classList.add('selected');
        c('.modelsInfo--actualPrice').innerHTML = `R$ ${modelsJson[key].price[sizeIndex].toFixed(2)}`;
    });
});

c('.modelsInfo--addButton').addEventListener('click', ()=>{
    //Precisamos saber:
    //Qual o modelo?
    //console.log("Modelo: " + key);
    //qual o tamanho?
    //a leitura é como string, devemos transformar em número
    //let size = c('.modelsInfo--size.selected').getAttribute('data-key'); 
    let size = parseInt(c('.modelsInfo--size.selected').getAttribute('data-key'));
    //console.log("Tamanho: " + size);
    //Quantidade?
    //console.log("Quantidade: " + modalQt)
    //Quando adicionamos de forma sucessiva o mesmo item, e mesmo tamanho, não podemos ter várias entradas
    //Isso é o que ocorre atualmente, precisamos de ajustes
    //Antes de adicionar devemos verificar se já existe aquele item com aquele tamanho
    //para isso funcionar vamos criar um identificador
    let identifier = modelsJson[key].id+'@'+size;
    //vamos verificar se este identificador já está no carrinho
    let locaId = cart.findIndex((item)=>item.identifier == identifier);
    //se tiver adiciona a quantidade no item já existente, senão acrescento
    if(locaId > -1){
        cart[locaId].qt += modalQt;
    } else {
        cart.push({
            identifier,
            id:modelsJson[key].id,
            size,
            qt:modalQt
        });
    }
    updateCart();
    closeModal();
});

//ajustando o mobile
c('.menu-openner').addEventListener('click', ()=>{
    if(cart.length > 0){
        c('aside').style.left = '0';
    }
});

c('.menu-closer').addEventListener('click', ()=>{
    c('aside').style.left='100vw';
});


function updateCart() {
    c('.menu-openner span').innerHTML = cart.length;
    if(cart.length > 0) {
        c('aside').classList.add('show');
        c('.cart').innerHTML = ''; //limpo o carinho - visual
        //Fechando valores
        let subtotal = 0;
        let total = 0;
        cart.map((itemCart, index)=>{
            let modelItem = modelsJson.find((itemBD)=>itemBD.id == itemCart.id);
            subtotal += modelItem.price[itemCart.size] * itemCart.qt;
            //console.log(modelItem);
            let cartItem = c('.models .cart--item').cloneNode(true);
            //Alternativa
            let modelSizeName;
            switch(itemCart.size) {
                case 0:
                    modelSizeName = '';
                    break;
                case 1:
                    modelSizeName = '';
                    break;
                case 2:
                    modelSizeName = '';
            }
            cartItem.querySelector('img').src = modelItem.img;
            //cartItem.querySelector('.cart--item-nome').innerHTML = `${modelItem.name} - ${modelItem.sizes[itemCart.size]}`;
            cartItem.querySelector('.cart--item-nome').innerHTML = `${modelItem.name} R$ ${modelItem.price[itemCart.size]},00`;
            cartItem.querySelector('.cart--item--qt').innerHTML = itemCart.qt;
            cartItem.querySelector('.cart--item-qtmenos').addEventListener('click',()=>{
                if(itemCart.qt > 1) {
                    itemCart.qt--
                } else {
                    cart.splice(index, 1);
                }
                updateCart();
            });
            cartItem.querySelector('.cart--item-qtmais').addEventListener('click',()=>{
                if((modelItem.name=='Aluguel do Espaço')&&(cart[i].qt>=1)){

         }else{itemCart.qt++;
      }     
                
                updateCart();
            });
            c('.cart').append(cartItem);
        });

        total = subtotal;

        c('.subtotal span:last-child');
        c('.total span:last-child').innerHTML = `R$ ${total.toFixed(2)}`;
    } else {
        c('aside').classList.remove('show');
        c('aside').style.left = '100vw';
    }
}

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>