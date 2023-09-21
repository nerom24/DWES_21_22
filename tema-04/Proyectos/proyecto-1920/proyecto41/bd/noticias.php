<?php
require_once("class/noticia.php");
// Noticia 1
$titulo = "Un virus de origen ruso ataca a importantes empresas españolas";
$extracto = "El grupo de piratas es el mismo que secuestró los sistemas del Ayuntamiento de Jerez en septiembre";
$parrafo1 = "Al menos dos empresas en España han sufrido un ciberataque que ha bloqueado sus sistemas informáticos desde la madrugada del lunes. La Cadena SER y Everis, una consultora tecnológica, son las dos víctimas conocidas del ataque. Durante todo el día del lunes otras compañías salieron a negar haber sufrido un ciberataque. El Incibe, organismo encargado de la ciberseguridad de las empresas privadas españolas, no ha dado detalles aún sobre el número de afectados ni las características: 'Es información confidencial', ha dicho a este periódico.";
$parrafo2 = "Según ha podido confirmar EL PAÍS de fuentes de la SER, el virus implicado en el ataque es Ryuk, el mismo que atacó al Ayuntamiento de Jerez el pasado 27 de septiembre. Ryuk es un ransomware, un programa que encripta los archivos de las víctimas y pide un rescate económico para permitir su recuperación. Ryuk apareció en agosto de 2018 y es manejado por un grupo ruso llamado Grim Spider, según la consultora Crowdstrike. Hasta enero de 2019 había logrado 3,5 millones de euros en 52 transacciones. 'Son profesionales del sector, con años dedicados al fraude bancario', dice un experto en ciberseguridad.";
$parrafo3 = "Cajamar e ING han negado a este periódico que hayan sido víctimas de ningún ciberataque, a pesar de haber admitido problemas en sus líneas de comunicación, informa Íñigo de Barrón. La aseguradora Mapfre también lo ha negado y ha insistido en que tienen a sus equipos listos por si llega una nueva oleada. KPMG y Accenture también han salido públicamente a desmentir distintas informaciones que las implicaban.";
$parrafo4 = "Gales debe ganar primero a Azerbayán el sábado 16 de noviembre, para después repetir victoria ante Hungría el 19 en Cardiff, en el que se antoja como decisivo, siempre y cuando Croacia no pierda ante Eslovaquia y convierta la cita del Millenium en una final. Giggs ha convocado al madridista y cuenta con Bale para al menos el segundo de los partidos, el que en teoría debe ser un partido decisivo.";
$cuerpo = [$parrafo1, $parrafo2, $parrafo3, $parrafo4];
$autor = "Jordi Pérez Colomé";
$fechaEdicion = "04.11.2019 - 21:38";
$fotografia = "images/foto4.jpg";
$epigrafe = "Un 'hacker' se infiltra en un sistema informático.";

$noticia1 = new Noticia(
    $titulo,
    $extracto,
    $cuerpo,
    $autor,
    $fechaEdicion,
    $fotografia,
    $epigrafe
);

// Noticia 2
$titulo = "Los alimentos que dañan el medio ambiente son también los peores para la salud";
$extracto = "Comer cereales, fruta, verdura, patata y aceite de oliva protege el planeta y previene enfermedades";
$parrafo1 = "El 60% de los factores de riesgo responsables de todas las enfermedades son el resultado de una dieta de mala calidad. Este hecho va de la mano con la salud del planeta. Uno estudio publicado en la revista PNAS demuestra que los alimentos más dañinos para el ser humano lo son también para su tierra.";
$parrafo2 = "Los investigadores han analizado 15 alimentos que forman parte de la dieta diaria occidental. Han vinculado la manera en la que se producen (el agua que se gasta, la superficie implicada y los productos químicos que se utilizan, entre otros) con los resultados de estudios anteriores sobre el impacto de esos mismos alimentos sobre la salud. Y todo cuadraba. La fruta, la verdura, la patata, el aceite de oliva, las legumbres, los frutos secos y los cereales son los alimentos más sanos y que, además, tienen un mínimo impacto sobre el planeta.";
$parrafo3 = "La carne roja procesada o sin procesar, en cambio, es un producto que se tendría que tachar de la lista de la compra. Muchas investigaciones ya han sacado conclusiones parecidas, pero este 'es el más riguroso hasta ahora, que recopila muchos más datos y analiza la relación entre salud y medio ambiente. Cuanto más estudios se hagan, mayor será el impacto sobre la gente', opina Julio Basulto, nutricionista en la Universidad Central de Cataluña (Vic) y escritor.";
$parrafo4 = "Si el ser humano occidental sigue comiendo como ahora, se notará un incremento alarmante de las enfermedades, de la contaminación de las aguas y las emisiones de gases de efecto invernadero. Además, un tercio de la comida que se produce nunca llega a manos del consumidor y termina en la basura, sostiene Michael Clark, principal autor del estudio e investigador de la Universidad de Oxford. Por lo tanto, el científico expresa la necesidad de controlar la fabricación, el consumo y el cultivo. ";
$cuerpo = [$parrafo1, $parrafo2, $parrafo3, $parrafo4];
$autor = "Agathe Cortes";
$fechaEdicion = "05.11.2019 - 09:37";
$fotografia = "images/foto2.jpg";
$epigrafe = "Una mujer separa granos de arroz de otros cereales y glumas";

$noticia2 = new Noticia(
    $titulo,
    $extracto,
    $cuerpo,
    $autor,
    $fechaEdicion,
    $fotografia,
    $epigrafe
);

// Noticia 3
$titulo = "Bale, recuperado para Gales";
$extracto = "Zidane no cuenta con el delantero ante el Galatasaray, pero su país le reclama";
$parrafo1 = "Gareth Bale ya toca balón. Lo hizo en el entrenamiento de ayer en el que ha sido el primer gesto de recuperación de los calambres que sufrió ante Croacia el pasado 13 de octubre y por los que todavía no ha podido jugar con el Real Madrid. De hecho, y pese a la evidente mejora, los técnicos madridistas no cuentan con la participación del galés hasta después del próximo parón de selecciones, es decir, para el choque ante la Real Sociedad del 23 de noviembre en el Santiago Bernabéu.";
$parrafo2 = "Ante el Galatasaray su participación está descartada y el partido ante el Eibar del próximo sábado se antoja como una quimera. Zinedine Zidane y compañía no tienen ninguna fe de poder contar con el delantero ante el equipo guipuzcoano. El francés no es amigo de forzar y todos los jugadores, antes de regresar a las alineaciones tras una lesión, se deben ejercitar una semana con el grupo, circunstancia que se escapa de la situación que actualmente vive Bale.";
$parrafo3 = "El problema llega con la convocatoria que hoy ha hecho pública la selección de Gales para jugar los dos últimos partidos de clasificación para la Eurocopa. La selección de Bale todavía mantiene alguna posibilidad de entrar en la fase final de manera directa o, al menos, vía repesca. Para ello debería terminar en el primer o segundo puesto o bien tercero del grupo clasificatorio que domina Croacia con 14 puntos, seguida de Hungría con dos puntos menos (las dos selecciones con tan solo un partido por jugar), Eslovaquia con 11 y Gales en cuarta posición con ocho puntos y dos partidos todavía por jugar. ";
$parrafo4 = "Gales debe ganar primero a Azerbayán el sábado 16 de noviembre, para después repetir victoria ante Hungría el 19 en Cardiff, en el que se antoja como decisivo, siempre y cuando Croacia no pierda ante Eslovaquia y convierta la cita del Millenium en una final. Giggs ha convocado al madridista y cuenta con Bale para al menos el segundo de los partidos, el que en teoría debe ser un partido decisivo.";
$cuerpo = [$parrafo1, $parrafo2, $parrafo3, $parrafo4];
$autor = "José Félix Díaz";
$fechaEdicion = "05.11.2019 - 08:39";
$fotografia = "images/foto3.jpg";
$epigrafe = "Bale levantando la mano.";

$noticia3 = new Noticia(
    $titulo,
    $extracto,
    $cuerpo,
    $autor,
    $fechaEdicion,
    $fotografia,
    $epigrafe
);

// Noticia 4
$titulo = "Alex Márquez se corona campeón del mundo de Moto2";
$extracto = "El hermano pequeño de Marc ata su segunda corona y confirma el doblete mundial para la familia";
$parrafo1 = "Alex Márquez es el nuevo campeón del mundo de Moto2. Atrapó el título en Malasia, tras terminar segundo una carrera dominada por el surafricano Brad Binder y en la que Alex supo gestionar la presión para mantener a su cola al suizo Thomas Luthi, principal rival para el campeonato. Con el trofeo, Márquez engorda su botín, ya fue campeón de Moto3 en 2014, y pone el lazo a una temporada brillante para el clan familiar: doble título mundial. Julià Márquez, padre de los campeones, reconocía tras la carrera que el título era un alivio para su hijo pequeño: 'Le ponen mucha presión', apuntó. La comparación con Marc es eterna. Alex, 23 años, debutó en la categoría en 2015 y no ha sido hasta el quinto año cuando se ha coronado. Ha visto, y sufrido, como otros pilotos lograban el paso a MotoGP mientras él no terminaba de cuajar en la cilindrada intermedia. Tiene contrato firmado para competir la temporada que viene en Moto2, pero el salto a MotoGP está más cerca.";
$parrafo2 = "En el húmedo Sepang, Márquez no tuvo una carrera fácil. 'Estoy exhausto', reconoció tras cruzar la meta. Brad Binder dominó la prueba y Alex, atornillado a un segundo puesto que le daba el título, trataba de administrar la ventaja que le sacaba a Luthi. Era apenas medio segundo, un abrir y cerrar de ojos que valía un título mundial. La carrera sirve como ejemplo de lo que ha sido la temporada: una lucha a brazo partido. Alex estrenó el calendario siendo séptimo en Qatar y no ganó hasta que la caravana mundialista aparcó en Le Mans, en plena primavera. Su título se labró con calor y sudor, entre mayo y agosto se embolsó cinco victorias. Alex se puso al frente del mundial en Sachsenring y desde entonces ya no le han apeado del liderato. Pero, hasta llegar a Malasia, las últimas carreras fueron un suplicio. Terminó quinto en Tailandia, sexto en Japón y octavo en Australia, y se adelgazó el colchón de puntos sobre el que descansaba su ventaja. La presión por el título comprometía las opciones del pequeño de los Márquez, pero en Sepang desvaneció las dudas de un plumazo.";
$parrafo3 = "Alex Márquez nació un día de Sant Jordi, día de cuentos y leyendas en Cataluña. A los 23 años, en Sepang, escribió otra página de su reluciente historia. Se apuntó su segundo título mundial, cinco años después de haberse coronado campeón de Moto3, en aquel 2014 que compartió corona con Marc, su hermano mayor. El salón de los Márquez Alentà, en la casa familiar de Cervera, necesitaría las dimensiones de una nave industrial para poder absorber al alud de trofeos que acumulan los muchachos.";
$parrafo4 = "Suman diez mundiales entre ambos, ocho de Marc, dos de Alex. La trayectoria del hermano menor es magnífica pero, a menudo, pierde relumbrón por la eterna comparación fraternal. 'Puede parecer que ser mi hermano es una ventaja, pero no es así', reconoce con frecuencia el campeón del mundo de MotoGP. Marc ejerce de guía y de referente para Alex, pero también se comporta como su principal fan. Este domingo, al cruzar la meta Alex y confirmarse como campeón de Moto2, su hermano lo esperaba a pie de curva para darle el primer abrazo. Marc, eufórico y pegando botes pese a las magulladuras que sufre por una dura caída, felicitaba a Alex mientras se preocupaba por sujetarle el casco y los guantes. Alex cuenta que su interés por ser piloto llegó de rebote, que él, de pequeño, se conformaba con ser mecánico para poder acompañar a su hermano a las carreras. El clan perdió a un mecánico pero ganó a un campeón del mundo.";
$cuerpo = [$parrafo1, $parrafo2, $parrafo3, $parrafo4];
$autor = "Marc Rovira";
$fechaEdicion = "03.11.2019 - 16:18";
$fotografia = "images/foto.jpg";
$epigrafe = "Marc Márquez celebra junto a su hermano Alex Márquez, campeón de Moto2";

$noticia4 = new Noticia(
    $titulo,
    $extracto,
    $cuerpo,
    $autor,
    $fechaEdicion,
    $fotografia,
    $epigrafe
);

// Noticia 5
$titulo = "YouTube investiga cómo mejorar recomendaciones y aumentar el tiempo de conexión";
$extracto = "Un estudio publicado por trabajadores de la compañía propone una actualización del algoritmo de la plataforma";
$parrafo1 = "“¿Cuánto podrían haber mejorado nuestros últimos momentos juntos si no fuera por los delirios inducidos por YouTube?”. El pasado mes de septiembre el hijo de un científico retirado de 80 años contó cómo su padre su padre se sumergió en una espiral tóxica de vídeos durante sus últimos años. Lo hizo a través de una campaña de la Fundación Mozilla, creada para concienciar sobre los problemas generados por el algoritmo de recomendaciones de esta popular plataforma de vídeos. Ahora, varios investigadores de la compañía Google, propietaria de la plataforma audiovisual, han propuesto una modificación de este algoritmo que mejoraría las recomendaciones y aumentaría el tiempo que los usuarios permanecen conectados.";
$parrafo2 = "La inteligencia artificial controla gran parte de la información que se consume hoy en día en Internet. Los algoritmos creados por las distintas plataformas “observan la actividad de los usuarios e infieren cosas que le puedan interesar y se las proponen”, explica Pablo Castells, profesor titular de la Escuela Politécnica Superior de la Universidad Autónoma de Madrid. “Hay muchas maneras de hacerlo, desde la más trivial, como es ofrecer simplemente lo más popular, hasta formas más complejas que implican fijarse en el comportamiento de cada usuario individual”.";
$parrafo3 = "En el caso de YouTube, la plataforma hace una primera lista de recomendaciones con varios cientos de vídeos relacionados con el que está viendo el usuario y luego va refinando dicha lista teniendo en cuenta sus clics, gustos y otras interacciones. El resultado es que de los mil millones de horas que se ven cada día en esta plataforma, un 70% corresponde a vídeos recomendados por el algoritmo.";
$parrafo4 = "Las distintas plataformas trabajan por mejorar este sistema, hacerlo aún más preciso y mantener durante unos minutos más a los usuarios delante de la pantalla y esto es lo que parece haber conseguido un equipo de investigadores de YouTube, según un artículo publicado en la revista ACM Digital Library. “Demostramos que nuestras propuestas pueden conducir a mejoras sustanciales en la calidad de las recomendaciones”, afirma el estudio.";
$cuerpo = [$parrafo1, $parrafo2, $parrafo3, $parrafo4];
$autor = "Teguayco Pinto";
$fechaEdicion = "04.11.2019 - 10:51";
$fotografia = "images/foto5.jpg";
$epigrafe = "La directiva de YouTube Susan Wojcicki, en una imagen de archivo.";

$noticia5 = new Noticia(
    $titulo,
    $extracto,
    $cuerpo,
    $autor,
    $fechaEdicion,
    $fotografia,
    $epigrafe
);