import './bootstrap';

import * as bootstrap from 'bootstrap';

document.addEventListener("DOMContentLoaded", function() {
    const track = document.querySelector(".carousel-track-1");
    // Products carousel
    const cards = Array.from(track.children);
    const prevButton = document.getElementById("prevButton");
    const nextButton = document.getElementById("nextButton");

    let cardWidth = cards[0].offsetWidth; // Largura do card + margem
    let currentIndex = 1; // Começamos do segundo card (o primeiro original)
    const totalCards = cards.length;

    // Clona os primeiros e últimos cards para criar a ilusão de loop infinito
    const firstCardClone = cards[0].cloneNode(true);
    const lastCardClone = cards[totalCards - 1].cloneNode(true);

    track.appendChild(firstCardClone); // Adiciona o clone do primeiro card ao final
    track.insertBefore(lastCardClone, track.firstElementChild); // Adiciona o clone do último card ao início

    // Atualiza o total de cards depois de adicionar os clones
    const updatedCards = Array.from(track.children);
    const updatedTotalCards = updatedCards.length;

    // Função para mover os cards (mover para frente ou para trás)
    function moveToCard(index) {
        track.style.transition = "transform 0.5s ease-in-out";
        track.style.transform = `translateX(${-cardWidth * index}px)`;
        currentIndex = index;
    }

    // Função para mover para o próximo card
    function moveToNextCard() {
        if (currentIndex < updatedTotalCards - 1) {
            moveToCard(currentIndex + 1);
        }

        if (currentIndex === updatedTotalCards - 2) {
            setTimeout(function() {
                track.style.transition = "none"; // Remove a transição
                track.style.transform = `translateX(${-cardWidth}px)`; // Volta para o primeiro card (sem a animação)
                currentIndex = 1;
            }, 500); // Tempo da animação (0.5s)
        }
    }

    // Função para mover para o card anterior
    function moveToPrevCard() {
        if (currentIndex > 0) {
            moveToCard(currentIndex - 1);
        }

        if (currentIndex === 1) {
            setTimeout(function() {
                track.style.transition = "none"; // Remove a transição
                track.style.transform = `translateX(${-cardWidth * (totalCards)}px)`; // Volta para o último card (sem a animação)
                currentIndex = totalCards;
            }, 500); // Tempo da animação (0.5s)
        }
    }

    // Inicia o carrossel com o primeiro card (evita mostrar o clone do último no início)
    track.style.transform = `translateX(${-cardWidth}px)`;

    // Eventos para os botões
    nextButton.addEventListener("click", moveToNextCard);
    prevButton.addEventListener("click", moveToPrevCard);
});




const track = document.querySelector('.carousel-track-2');
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
    track.style.transition = isSmooth ? 'transform 800ms ease-in-out' : 'none';
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
let autoSlide = setInterval(nextCard, 5000);

// Pausar o auto-slide quando o mouse estiver sobre o carrossel
track.addEventListener('mouseover', () => {
    clearInterval(autoSlide);
});

// Retomar o auto-slide ao remover o mouse
track.addEventListener('mouseout', () => {
    autoSlide = setInterval(nextCard, 5000);
});

