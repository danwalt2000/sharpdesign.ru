const state = {};
const carouselList = document.querySelector('.carousel__list');
const carouselItems = document.querySelectorAll('.carousel__item');
const elems = Array.from(carouselItems);

if(carouselList){
    carouselList.addEventListener('click', function (event) {
        var newActive = event.target;
        var isItem = newActive.closest('.carousel__item');
    
        if (!isItem || newActive.classList.contains('carousel__item_active')) {
            return;
        };
    
            update(newActive);
    });
}

const update = function(newActive) {
    const newActivePos = newActive.dataset.pos;

    const current = elems.find((elem) => elem.dataset.pos == 0);
    const prev = elems.find((elem) => elem.dataset.pos == -1);
    const next = elems.find((elem) => elem.dataset.pos == 1);
    const prevMinusOne = elems.find((elem) => elem.dataset.pos == -2);
    const nextPlusOne = elems.find((elem) => elem.dataset.pos == 2);
    const prevMinusTwo = elems.find((elem) => elem.dataset.pos == -3);
    const nextPlustwo = elems.find((elem) => elem.dataset.pos == 3);
    const first = elems.find((elem) => elem.dataset.pos == -4);
    const last = elems.find((elem) => elem.dataset.pos == 4);
    
    current.classList.remove('carousel__item_active');
    
    [current, prev, next, prevMinusOne, nextPlusOne, nextPlustwo, prevMinusTwo, first, last].forEach(item => {
        var itemPos = item.dataset.pos;

        item.dataset.pos = getPos(itemPos, newActivePos)
    });
};

const getPos = function (current, active) {
    const diff = current - active;

    if (Math.abs(current - active) > 2) {
        return -current
    }

    return diff;
}