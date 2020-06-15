const changeName = ()=>{
    const stringg = document.getElementById('typeSelect');
    const othern = document.getElementById('NombreForm')

    stringg.addEventListener('click', ()=>{
        if(stringg.value == 'empresa'){
            othern.placeholder = 'Nombre de la empresa'
        }
        else{
            othern.placeholder = 'Nombre'
        }
    })
}

changeName()