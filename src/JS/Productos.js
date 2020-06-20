const ProdsDev = () =>{
    const ListProds = document.getElementsByClassName('ListProdsLi');
    const ListProdsIn = document.getElementsByClassName('ListProdsIn');

    var i;
    var tr = true;
    for(i = 0; i < ListProds.length; i++){
        ListProds[i].addEventListener('click', (event)=>{
            
            var add = event.target;
            if(add.className == 'fa fa-angle-down' || add.className == 'fa fa-angle-up'){
                var element = add.parentElement.parentElement.getElementsByClassName('ListProdsIn')[0];
                var arrow = add.parentElement.childNodes[1];
            }else{
                var element = add.parentElement.getElementsByClassName('ListProdsIn')[0];
                var arrow = add.childNodes[1];
            }

            if(tr){
                element.style.display = "flex";
                tr = false;
                arrow.className = "fa fa-angle-up";
            }else{
                element.style.display = "none";
                tr = true
                arrow.className = "fa fa-angle-down";
            }
            
        })
    }
    
}

ProdsDev()

