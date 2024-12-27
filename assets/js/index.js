document.addEventListener("DOMContentLoaded", function () {
  const munecas = document.querySelectorAll(".muneca");

  munecas.forEach((muneca) => {
    muneca.addEventListener("mouseover", function () {
      const info = muneca.querySelector(".info");
      info.style.top = "0";
    });

    muneca.addEventListener("mouseout", function () {
      const info = muneca.querySelector(".info");
      info.style.top = "100%";
    });
  });

  const headerNormal = document.querySelector(".header_normal");
  const headerScrolled = document.querySelector(".header_scrolled");
  const logoScrolled = document.querySelector(".logo_scrolled");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 60) {
      // Scrolling down
      headerScrolled.style.opacity = "1";
      headerNormal.style.opacity = "0";
      headerNormal.style.transform = "translateY(-500px)";
      headerScrolled.style.transform = "translateY(0px)";
      logoScrolled.style.transform = "translateX(0px)";
    } else {
      // Scrolling to the top
      headerNormal.style.opacity = "1";
      headerScrolled.style.opacity = "0";
      headerNormal.style.transform = "translateY(0px)";
      headerScrolled.style.transform = "translateY(-500px)";
      logoScrolled.style.transform = "translateX(-500px)";
    }
  });

  const heights = document.querySelectorAll(".height");

  heights.forEach((heightElement) => {
    const heightValue = parseInt(heightElement.getAttribute("data-height"), 10);
    let imgSrc;

    if (heightValue < 30) {
      imgSrc = "assets/images/icons/tiny.png";
    } else if (heightValue >= 30 && heightValue < 70) {
      imgSrc = "assets/images/icons/mid.png";
    } else {
      imgSrc = "assets/images/icons/big.png";
    }

    const img = document.createElement("img");
    img.src = imgSrc;
    img.alt = "height icon";
    heightElement.appendChild(img);
  });

  // Auto-scrolling gallery
  const galleryWrapper = document.querySelector(".gallery-wrapper");
  const photos = document.querySelectorAll(".photo");

  // Obtener el valor de gap
  const gap = parseInt(window.getComputedStyle(galleryWrapper).gap, 10);
  const photoWidth = photos[0].offsetWidth + gap; // Incluye el gap en el cálculo
  const visibleWidth = galleryWrapper.parentElement.offsetWidth; // Ancho visible del contenedor

  // Calcular cuántas imágenes son visibles
  const imagesVisible = Math.floor(visibleWidth / photoWidth); // Número de imágenes visibles al mismo tiempo

  let currentOffset = 0; // Desplazamiento inicial
  let scrollSpeed = 0.5; // Velocidad de desplazamiento en píxeles por cuadro
  let direction = -1; // -1 para desplazamiento hacia la izquierda, 1 para la derecha

  function continuousScroll() {
    const totalWidth = photoWidth * photos.length; // Ancho total de las imágenes

    // Incrementa el desplazamiento en función de la dirección
    currentOffset += direction * scrollSpeed;

    // Cambiar de dirección al llegar al final o al principio
    if (currentOffset <= -(totalWidth - visibleWidth)) {
      direction = 1; // Cambiar dirección a la derecha
    } else if (currentOffset >= 0) {
      direction = -1; // Cambiar dirección a la izquierda
    }

    // Aplica el desplazamiento
    galleryWrapper.style.transform = `translateX(${currentOffset}px)`;

    // Solicita el siguiente cuadro de animación
    requestAnimationFrame(continuousScroll);
  }

  // Inicia el scroll continuo
  continuousScroll();

  const enlaces = document.querySelectorAll(".enlaces");

  enlaces.forEach((enlace) => {
    enlace.addEventListener("click", function (e) {
      e.preventDefault(); // Evita el comportamiento de desplazamiento predeterminado

      const destino = document.querySelector(this.getAttribute("href")); // Obtiene la sección destino
      const offset = 80; // Ajusta el valor de offset (en píxeles) según tus necesidades

      window.scrollTo({
        top: destino.offsetTop - offset, // Desplaza hacia el destino con el ajuste
        behavior: "smooth", // Desplazamiento suave
      });
    });
  });
});
