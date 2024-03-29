particlesJS("contarner", {

    "particles": {
        "number": {
            "value": 100, // фиксированное количество частиц
            "density": {
                "enable": true, // включить плотность частиц
                "value_area": 800 // Размер области с фиксированным количеством частиц
            }
        },
        "color": {
            "value": "#787878" // цвет частицы
        },
        "shape": {
            "type": "circle", // форма частицы
            "stroke": {
                "width": 0, // Ширина границы частиц
                "color": "#FF13FE" // Цвет границы частиц
            },
            "polygon": {
                "nb_sides": 5 // Количество сторон частицы многоугольника
            },
            "image": {
                "src": "image/par.svg", // Пользовательские частицы (svg / png / gif / jpg)
                "width": 100, // Настройка ширины изображения частицы
                "height": 100 // Настраиваем высоту изображения частицы
            }
        },
        "opacity": {
            "value": 0.5, // Непрозрачность 0 ~ 1
            "random": false, // случайная непрозрачность
            "anim": {
                "enable": false, // Включаем переход и градиент
                "speed": 1, // Скорость градиентной анимации
                "opacity_min": 0.1, // Градиентная анимация непрозрачности
                "sync": false
            }
        },
        "size": {
            "value": 3, // размер частицы
            "random": true, // Случайный размер частиц
            "anim": {
                "enable": true, // Включить анимацию масштабирования частиц
                "speed": 20, // Скорость анимации
                "size_min": .5, // Минимальный размер усадочной частицы 0 ~ 1
                "sync": false
            }
        },
        "line_linked": {
            "enable": true, // Включаем соединительную линию
            "distance": 150, // Эффективное расстояние соединительной линии
            "color": "#787878", // Цвет линии соединения
            "opacity": 0.4, // Непрозрачность линии соединения 0 ~ 1
            "width": 1 // Ширина соединительной линии
        },
        "move": {
            "enable": true, // Включаем движение частиц
            "speed": 1, // Скорость движения
            "direction": "none", // направление движения
            "random": false, // Случайное направление
            "straight": false, // двигаться прямо
            "out_mode": "out", // Край выдвигается, отскакивает
            "bounce": false, // Прыгать или двигаться
            "attract": {
                "enable": false, // притяжение между частицами
                "rotateX": 600, // X горизонтальное расстояние
                "rotateY": 1200 // Y горизонтальное расстояние
            }
        }
    },

    "interactivity": {
        "detect_on": "canvas", // Обнаружение взаимодействия между частицами
        "events": {
            "onhover": {
                "enable": true, // Включаем наведение мыши
                "mode": "grab" // режим наведения
            },
            "onclick": {
                "enable": true, // Включаем щелчок мышью
                "mode": "push" // Режим клика
            },
            "resize": true // Интерактивная корректировка событий
        },
        "modes": {
            "grab": {
                "distance": 140, // расстояние интерактивного захвата частиц
                "line_linked": {
                    "opacity": 1 // Непрозрачность интерактивного захвата частиц
                }
            },
            "bubble": {
                "distance": 400, // Расстояние между частицами, захватывающими пузырь
                "size": 40, // Размер между частицами, захватывающими пузырь
                "duration": 2, // Длительность между эффектами захвата частиц пены
                "opacity": 8, // Непрозрачность
                "speed": 3 // скорость
            },
            "repulse": {
                "distance": 200, // Расстояние эффекта отталкивания
                "duration": 0.4 // Длительность эффекта отталкивания
            },
            "push": {
                "particles_nb": 4 // Количество запущенных частиц
            },
            "remove": {
                "particles_nb": 2 // Количество удаленных частиц
            }
        }
    },
    "retina_detect": true // Обнаружение сетчатки, т.е. отсутствие мерцания
});