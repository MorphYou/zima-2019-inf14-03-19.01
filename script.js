
document.querySelector('#dramatic').addEventListener('click', () => {
    let others = document.querySelectorAll('main');
    for (other of others){
        other.classList.add('none');
    }
    document.querySelector('#mdramatic').classList.toggle('none');
})

document.querySelector('#horror').addEventListener('click', () => {
    let others = document.querySelectorAll('main');
    for (other of others){
        other.classList.add('none');
    }
    document.querySelector('#mhorror').classList.toggle('none');
})

document.querySelector('#sci').addEventListener('click', () => {
    let others = document.querySelectorAll('main');
    for (other of others){
        other.classList.add('none');
    }
    document.querySelector('#msci').classList.toggle('none');
})

document.querySelector('#comedy').addEventListener('click', () => {
    let others = document.querySelectorAll('main');
    for (other of others){
        other.classList.add('none');
    }
    document.querySelector('#mcomedy').classList.toggle('none');
})