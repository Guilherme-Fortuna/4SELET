import './bootstrap';

import * as bootstrap from 'bootstrap';

const track = document.querySelector('.carousel-track');
const cards = Array.from(track.children);
const totalCards = cards.length;
const cardWidth = cards[0].offsetWidth; // Largura do card sem margem
let currentIndex = 0;
let isMoving = false;

// Clonando os primeiros três cards e adicionando ao final para o efeito de loop infinito
for (let i = 0; i < 3; i++) {
    const clone = cards[i].cloneNode(true);
    track.appendChild(clone);
}

const moveToCard = (index, isSmooth = true) => {
    const amountToMove = cardWidth * index;
    track.style.transition = isSmooth ? 'transform 500ms ease-in-out' : 'none';
    track.style.transform = `translateX(-${amountToMove}px)`;
};

// Função para rolar automaticamente
const nextCard = () => {
    if (!isMoving) {
        isMoving = true;
        currentIndex++;
        moveToCard(currentIndex);

        // Verificar se chegou ao final do carrossel
        if (currentIndex === totalCards) {
            setTimeout(() => {
                // Remove a transição
                track.style.transition = 'none';
                // Reinicia o índice
                currentIndex = 0;
                // Move sem animação
                moveToCard(currentIndex, false);
            // Tempo igual à animação da transição
            }, 300);
        }

        setTimeout(() => {
            isMoving = false;
        }, 300);
    }
};

// Configuração do auto-slide a cada 1 segundo
let autoSlide = setInterval(nextCard, 1000);

// Pausar o auto-slide quando o mouse estiver sobre o carrossel
track.addEventListener('mouseover', () => {
    clearInterval(autoSlide);
});

// Retomar o auto-slide ao remover o mouse
track.addEventListener('mouseout', () => {
    autoSlide = setInterval(nextCard, 1000);
});
