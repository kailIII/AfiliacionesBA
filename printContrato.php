<?php 
//echo get_include_path() . PATH_SEPARATOR . "/dompdf";
set_include_path(get_include_path() . PATH_SEPARATOR . "/dompdf");
 
require_once "dompdf/dompdf_config.inc.php";
 
$dompdf = new DOMPDF();
 
$html = <<<'ENDHTML'
<p>LAS PARTES CONTRATANTES aqu&iacute; nominadas, por medio de este documento, convenimos en celebrar el <strong>CONTRATO DE PRESTACI&Oacute;N DEL SERVICIO DENOMINADO &quot;BANCA POR INTERNET Y BANCA M&Oacute;VIL&quot;</strong>, cuyas estipulaciones y t&eacute;rminos son los siguientes:</p>
<p>
    <b>1. </b>
    <b>ANTECEDENTES Y OBJETO</b>
</p>
<p align="justify">El CLIENTE declara que es titular de servicios y/o productos activos, pasivos y neutros,  ya contratados previamente o que en el futuro contrate, conforme los t&eacute;rminos y condiciones que constan en los respectivos contratos, y  de los cuales puede disponer por medio de distintos canales f&iacute;sicos y/o electr&oacute;nicos tales como:
Agencias, Cajeros Autom&aacute;ticos, Kioskos, Internet, Telebanca.</p>
<p align="justify">Que con el objeto de brindar un canal  adicional  a los ya mencionados y, para disponer de tales  servicios y productos, que   mediante   el uso de equipos, dispositivos m&oacute;viles y sistemas automatizados,  permitan al cliente, visualizar, consultar y operar transacciones, el Banco pone a disposici&oacute;n del cliente, por medio del presente contrato,  la prestaci&oacute;n de servicios bancarios a trav&eacute;s de  canales electr&oacute;nicos de Internet y de Banca M&oacute;vil  de acuerdo al art&iacute;culo 56 literal &quot;L&quot; de la Ley de Bancos.</p>
<p>
    <b>2. </b>
    <b>PRESTACI&Oacute;N DEL SERVICIO</b>
</p>
<p align="justify">
a) El presente servicio podr&aacute;  ser  brindado a los clientes  que previo a esta fecha, ya poseen E BANCA PERSONAS, siempre que a su opci&oacute;n y libre decisi&oacute;n,  declinen de dicho contrato y suscriban el respectivo formulario de  Terminaci&oacute;n de Contrato,  como acto previo a la contrataci&oacute;n del servicio de Banca por Internet y Banca M&oacute;vil.</p>
<p align="justify">
    b) El Acceso a Banca por Internet es exclusivo para operaciones financieras  con productos del Banco. Este servicio se podr&aacute; contratar en agencias de EL BANCO de todo el pa&iacute;s o por los medios de afiliaci&oacute;n que EL BANCO brinde a sus clientes para tal efecto.</p>
<p align="justify">
c) El acceso a Banca M&oacute;vil es exclusivo para operaciones financieras con productos del Banco, por medio de dispositivos m&oacute;viles, mediante descarga de la aplicaci&oacute;n y contrataci&oacute;n del servicio de datos con la compañ&iacute;a telef&oacute;nica de su preferencia.</p>
<p align="justify">
    d) Mensajes de texto a dispositivos m&oacute;viles y al correo electr&oacute;nico que EL BANCO enviar&aacute; sobre informaci&oacute;n relacionada a los servicios y productos que EL BANCO ofrece, as&iacute; como requerimientos de cobranza respecto de las deudas que pueda mantener con EL BANCO.</p>
<p align="justify">
    e) Notificaciones electr&oacute;nicas sobre servicios especiales de inter&eacute;s de EL CLIENTE, a trav&eacute;s de los mensajes de texto o correo electr&oacute;nico.</p>
    <p align="justify">
    f) Geolocalizaci&oacute;n es un servicio por medio del cual, le permite a EL CLIENTE ubicar todos los puntos de atenci&oacute;n de EL BANCO en un mapa satelital, incluyendo las horas de servicio y direcci&oacute;n exacta.</p>
    <p align="justify">
    g) C&aacute;mara de Compensaci&oacute;n Automatizada (ACH) la cual le permite a EL CLIENTE la realizaci&oacute;n de operaciones interbancarias.</p>
<p>
    <b>3. </b>
    <b>TIPOS DE ACCESO PARA BANCA POR INTERNET Y BANCA MOVIL</b>
</p>
<p align="justify">
a) EL CLIENTE podr&aacute; acceder a las diferentes transacciones bancarias de los diversos productos o servicios financieros que &eacute;ste tenga o tuviera en un futuro, contratadas con aqu&eacute;l, a trav&eacute;s de Banca por Internet y Banca M&oacute;vil. Para  dep&oacute;sitos  a  plazo fijo no aplican transacciones bancarias.</p>
<p align="justify">
b) EL BANCO podr&aacute; ofrecer el servicio a EL CLIENTE que solo posea tarjeta de cr&eacute;dito, con las condiciones antes descritas siempre y cuando acepte el env&iacute;o de estados de cuenta por medio electr&oacute;nico, sustituyendo la emisi&oacute;n impresa.</p>
<p align="justify">
c) El acceso a Banca por Internet ser&aacute; mediante el portal del Banco y mediante  el ingreso de la clave o PIN  de uso exclusivo de EL CLIENTE; asimismo, el servicio banca m&oacute;vil  ser&aacute; activado en el momento que EL CLIENTE  ingrese a banca m&oacute;vil por medio de su dispositivo m&oacute;vil y acepte los t&eacute;rminos y condiciones  en el nuevo contrato, mediante el ingreso de su clave o PIN de uso exclusivo DE EL CLIENTE.</p>
<p>
    <b>4. </b>
    <b>BANCA POR INTERNET</b>
</p>
<p align="justify">
EL BANCO proporcionar&aacute; a EL CLIENTE el  servicio de Banca por Internet, el cual le permitir&aacute; el acceso a los productos con aqu&eacute;l, a trav&eacute;s de los equipos y mediante los sistemas automatizados que EL BANCO ponga a disposici&oacute;n de EL CLIENTE, las cuales tendr&aacute;n en consideraci&oacute;n entre otras:</p>
<p align="justify">
a) Consultas. Se podr&aacute;n realizar consultas sobre sus cuentas, dep&oacute;sitos a plazos, pr&eacute;stamos y tarjetas de cr&eacute;dito emitidos por EL BANCO; saldos, estados de cuenta, consulta de cheques suspendidos, consulta de Megamillas y de cualquier otro servicio espec&iacute;fico que EL CLIENTE haya solicitado. </p>
<p align="justify">
b) Operaciones financieras que se podr&aacute;n realizar. Transferir fondos entre cuentas propias y a terceros abiertas en EL BANCO; realizar pagos a pr&eacute;stamos, tarjetas de cr&eacute;dito y servicios; solicitud de chequeras, pr&eacute;stamos, tarjeta de cr&eacute;dito y estados de cuenta, reserva de cheques, bloqueo de cuentas de dep&oacute;sito, suspensi&oacute;n de pago de cheques, entre otras y cualquier otro servicio que en el futuro EL BANCO ofrezca a sus clientes. </p>
<p align="justify">
Todas las operaciones anteriores podr&aacute;n realizarse tambi&eacute;n en Agencias de EL BANCO, salvo aquellos otros servicios que en el futuro EL BANCO  ofrezca a sus clientes y que solo puedan realizarse a trav&eacute;s de banca internet, tales como: recargas de celular, etc.</p>

<p>
    <b>5. </b>
    <b>BANCA MOVIL</b>
</p>
<p align="justify">
El servicio Banca M&oacute;vil permitir&aacute; a EL CLIENTE una comunicaci&oacute;n directa con EL BANCO por medio de un dispositivo m&oacute;vil, con el fin de permitirle la realizaci&oacute;n de operaciones y transacciones bancarias habilitadas por EL BANCO y a solicitud de EL CLIENTE. 
</p>
<p align="justify">Mediante el servicio Banca M&oacute;vil, EL CLIENTE, siempre y cuando estuviese habilitado para ello, podr&aacute; efectuar las operaciones mencionadas a continuaci&oacute;n: </p>
<p align="justify">
a) Registro del servicio Banca M&oacute;vil.</p>
<p align="justify">
b) Consultas de cuentas, tarjeta de cr&eacute;dito, pr&eacute;stamos y cualquier producto que en el futuro EL CLIENTE contrate con EL BANCO.</p>
<p align="justify">
c) Transferir fondos entre cuentas propias y a terceros hasta los l&iacute;mites fijados por EL BANCO y notificado a EL CLIENTE por los medios que EL BANCO estime conveniente.</p>
<p align="justify">
d) Pago de servicios y cualquier otra funcionalidad que en el futuro EL BANCO ofrezca a sus clientes.</p>
<p align="justify">Todas las operaciones anteriores podr&aacute;n realizarse tambi&eacute;n en Agencias del banco, salvo aquellos otros servicios que en el futuro el banco  ofrezca a sus clientes y que solo puedan realizarse a trav&eacute;s de banca m&oacute;vil. </p>
<p>
    <b>5.1) </b>
    <b>TECNOLOGIA REQUERIDA </b>
</p>
<p align="justify">Para poder acceder al servicio, EL CLIENTE debe contar con un dispositivo m&oacute;vil apto para la tecnolog&iacute;a requerida en su momento por EL BANCO y deber&aacute; poseer activo el servicio de telefon&iacute;a celular, navegaci&oacute;n a internet, plan de datos, Wi-Fi o cualquier otro requisito necesario al momento de la aceptaci&oacute;n del presente contrato, as&iacute; como mantener actualizados ante EL BANCO los datos b&aacute;sicos necesarios para el suministro del servicio, en especial el n&uacute;mero de celular y la cuenta de correo electr&oacute;nico. En este sentido, EL BANCO no se hace responsable por la suspensi&oacute;n o deshabilitaci&oacute;n del servicio por incumplimiento de &eacute;sta obligaci&oacute;n; toda mejora efectuada al sistema o adici&oacute;n de funcionalidades en el servicio de Banca M&oacute;vil, EL BANCO actualizar&aacute; con las herramientas y/o recursos disponibles;</p>
<p>
    <b>5.2) </b>
    <b>USO PERSONAL</b>
</p>
<p align="justify">La informaci&oacute;n que EL CLIENTE recibir&aacute; es de uso estrictamente personal, por lo cual no deber&aacute; revelar a terceros dicha informaci&oacute;n. EL CLIENTE deber&aacute; adoptar todas las precauciones pertinentes para que la informaci&oacute;n que EL BANCO env&iacute;e a su dispositivo m&oacute;vil sea &uacute;nicamente visualizada y conocida por &eacute;l. </p>
<p>
    <b>5.3) </b>
    <b>PROVEEDORES DEL CLIENTE</b>
</p>
<p align="justify">EL CLIENTE podr&aacute; elegir, por cuenta propia y seg&uacute;n su criterio, los proveedores de las tecnolog&iacute;as y equipos requeridos para acceder a la aplicaci&oacute;n de Banca M&oacute;vil. Los t&eacute;rminos y condiciones de Banca M&oacute;vil no incluyen las condiciones de contrataci&oacute;n con estas empresas, las cuales ser&aacute;n acordadas directamente por EL CLIENTE, sin intervenci&oacute;n ni responsabilidad alguna por parte de EL BANCO.</p>
<p>
    <b>5.4) </b>
    <b>MATERIAL DE INFORMACION</b>
</p>
<p align="justify">EL BANCO ofrecer&aacute; una presentaci&oacute;n del servicio, la cual puede ser accedida desde el portal de Internet y/o los dem&aacute;s canales de informaci&oacute;n y/o atenci&oacute;n al p&uacute;blico que EL BANCO habilite. A tal efecto EL CLIENTE tendr&aacute; a su disposici&oacute;n y acceso a dicho material, el que estar&aacute; obligado a conocer, bajo su responsabilidad, para operar apropiadamente a trav&eacute;s de Banca M&oacute;vil. </p>
<p>
    <b>5.5) </b>
    <b>RESPONSABILIDAD DE EL BANCO</b>
</p>
<p align="justify">a)	EL BANCO es  responsable de garantizar  la seguridad de la infraestructura tecnol&oacute;gica para brindar el servicio. 
</p>
<p align="justify">b)	El Banco es responsable de garantizar la continuidad del servicio, salvo casos fortuitos o de fuerza mayor debidamente comprobables. En todo caso el Banco comunicar&aacute; oportunamente en los medios que disponga.</p>
<p align="justify">c)	El banco es responsable del funcionamiento adecuado de los sistemas tecnol&oacute;gicos y de gesti&oacute;n de EL CLIENTE que son requeridos para brindar el servicio de Banca M&oacute;vil, pero el proceso posterior de env&iacute;o de informaci&oacute;n desde estas empresas hasta EL CLIENTE no es responsabilidad de EL BANCO.  </p>
<p align="justify">d)	EL BANCO s&oacute;lo atender&aacute; consultas que EL CLIENTE tenga sobre la operatividad de Banca M&oacute;vil, siempre y cuando estas correspondan a los procesos operativos de los cuales EL BANCO es responsable.</p>
<p align="justify">e)	EL BANCO no asume ninguna responsabilidad por los inconvenientes que EL CLIENTE tuviera con el equipo, hardware y proveedor utilizado para acceder a este servicio. </p>
<p>
    <b>5.6) </b>
<b>RESPONSABILIDAD DE EL CLIENTE</b></p>
<p align="justify">a)	EL CLIENTE asume la responsabilidad por el uso indebido o inadecuado del sistema, que no sea parte del Sistema tecnol&oacute;gico y de gesti&oacute;n del Banco, por lo tanto EL CLIENTE se hace cargo de todos los daños y perjuicios correspondientes sin que ello obste a la facultad de EL BANCO para actualizar, suspender y/o interrumpir el servicio, previo aviso al cliente, por razones de seguridad del mismo cliente y protecci&oacute;n al servicio, en situaciones tales como los casos de: phishing, pr&eacute;stamo de claves a terceros, etc.</p>
<p align="justify"> b)	Ocurrida una interrupci&oacute;n por cualquier causa, EL CLIENTE siempre tendr&aacute; la alternativa de solicitar la informaci&oacute;n u ordenar las transacciones requeridas mediante los medios tradicionales en las sucursales de EL BANCO.  </p>
<p align="justify">c)	Es responsabilidad exclusiva de EL CLIENTE elegir las empresas de servicios de Internet y telefon&iacute;a celular que le resulten confiables para permitirle acceder al servicio y recibir mensajes de texto y/o correo electr&oacute;nico.  </p>
<p align="justify">d)	Es responsabilidad de EL CLIENTE el descargar la aplicaci&oacute;n y las actualizaciones que se den en el futuro as&iacute; como el uso y consumo del plan de datos requeridos para tal efecto.  </p>
<p align="justify">e)	EL CLIENTE es responsable de contar con el espacio suficiente en memoria del dispositivo para almacenar la aplicaci&oacute;n y sus actualizaciones. </p>
<p>
    <b>5.7) </b>
    <b> OPERACIONES</b>
</p>
<p align="justify">a)	Al ingresar al sistema, EL CLIENTE quedar&aacute; habilitado para realizar todas las operaciones que EL BANCO determine, incluida la adquisici&oacute;n de productos y/o servicios, que tengan autorizados la aceptaci&oacute;n electr&oacute;nica, que se har&aacute;n seg&uacute;n las condiciones particulares de cada una de ellos y as&iacute; lo aceptar&aacute; EL CLIENTE.</p>
<p align="justify">b)	Las operaciones cursadas a trav&eacute;s de este sistema ser&aacute;n tomadas "en firme". Se entiende que una operaci&oacute;n es firme  cuando ha sido confirmada por el cliente  y por tanto es irrevocable, sea monetaria &oacute; no, tales como: un cargo y un abono, una reserva de fondos, bloqueo de tarjetas, bloqueo de cheques, etc.</p>

<p>
    <b>5.8) </b>
    <b>SUSPENSION DEL SERVICIO</b>
</p>
<p align="justify">a)	No obstante  la obligaci&oacute;n del Banco a dar fiel cumplimiento a lo regulado en el art&iacute;culo 70 de la Ley de Bancos, si el BANCO se viera obligado a realizar suspensiones temporales del servicio por razones de mantenimiento  o mejoras  al servicio las mismas ser&aacute;n notificadas oportunamente seg&uacute;n sea predecible el evento que motiva la suspensi&oacute;n. Tambi&eacute;n EL BANCO podr&aacute; suspender el servicio de forma temporal por motivos de fuerza mayor y caso fortuito.</p>
<p align="justify">b)	EL BANCO podr&iacute;a suspender el servicio de Banca M&oacute;vil a aquellos clientes que infrinjan estos T&eacute;rminos y Condiciones o cualquiera de las restantes normas de gesti&oacute;n vigentes para los servicios de EL BANCO.  </p>
<p align="justify">c)	La suspensi&oacute;n del servicio Banca M&oacute;vil, en forma definitiva, puede ser decidida por EL BANCO y ser&aacute; comunicada previa y oportunamente a sus clientes, restando as&iacute; cualquier tipo de responsabilidad al Banco por los daños y perjuicios que la suspensi&oacute;n entrañe. La suspensi&oacute;n definitiva ser&aacute; comunicada previamente con  al menos  30 d&iacute;as de anticipaci&oacute;n.  </p>
<p align="justify">d)	Las suspensiones temporales o definitivas que realice el operador de telefon&iacute;a celular contratada por EL CLIENTE de su servicio de mensajes de texto, o bien el proveedor de servicios de internet, o bien las realizadas por cualquier otra empresa responsable de transmitir la informaci&oacute;n; no son competencia de EL BANCO, ya que las mismas dependen de las pol&iacute;ticas de gesti&oacute;n de tales empresas.  </p>
<p align="justify">e)	<strong>El uso de Banca M&oacute;vil no es obligatorio, aun cuando est&eacute; incorporado en el presente contrato.</strong>  </p>
<p align="justify">f)	Cada servicio es ofrecido dentro de estos mismos T&eacute;rminos y Condiciones, los cuales EL CLIENTE acepta al incorporarse por primera vez al servicio o renovar la suscripci&oacute;n que haya anulado.  </p>
<p align="justify">La suscripci&oacute;n de EL CLIENTE al presente servicio no implica obligaci&oacute;n para EL BANCO de enviarle informaci&oacute;n comercial. </p>
<p>
    <b>6) </b>
    <b>AFILIACION </b>
</p>

<p align="justify">i.	Todo cliente que contrate el servicio de BANCA INTERNET Y BANCA MOVIL, podr&aacute; afiliarse accediendo a la p&aacute;gina Web del banco:<u> www.bancoagricola.com;  o mediante su dispositivo m&oacute;vil, previa descarga de la aplicaci&oacute;n.</u></p>
<p align="justify">ii.	Para ambos canales de afiliaci&oacute;n el cliente  deber&aacute; completar toda la informaci&oacute;n requerida por EL BANCO y  crear un usuario y  clave de acceso; en el proceso  el Banco mostrar&aacute; los t&eacute;rminos y condiciones del servicio, conforme este contrato, y EL CLIENTE podr&aacute; aceptar o declinar el servicio.  </p>
<p align="justify">iii.	La aceptaci&oacute;n electr&oacute;nica de este contrato generar&aacute; una referencia la cual podr&aacute; visualizar, imprimir o guardar a opci&oacute;n de EL CLIENTE en  Banca por Internet. El  CLIENTE  adem&aacute;s podr&aacute; solicitar una copia con firma aut&oacute;grafa, en cualquiera de las Agencias de EL BANCO en todo el Pa&iacute;s, de conformidad a lo regulado  en el art&iacute;culo  22 de la Ley de Protecci&oacute;n al Consumidor.  </p>
<p align="justify">iv.	Todo cliente que a esta fecha ya posee  BANCA POR INTERNET y desea activar el servicio de  BANCA MOVIL, podr&aacute; acceder por medio de su dispositivo m&oacute;vil, previa descarga de la aplicaci&oacute;n, en dependencia del tipo de dispositivo y sistema operativo que EL CLIENTE posea. El sistema le mostrar&aacute; los t&eacute;rminos y condiciones del servicio, conforme este contrato, y EL CLIENTE podr&aacute; aceptar o declinar el servicio. La aceptaci&oacute;n electr&oacute;nica  generar&aacute; en su dispositivo m&oacute;vil una referencia la cual podr&aacute; visualizar, imprimir o guardar  en Banca por Internet. </p>
<p>
    <b>7) </b>
    <b>MENSAJERIA DE TEXTOS Y CORREOS ELECTRONICOS. NOTIFICACIONES. T&Eacute;RMINOS Y CONDICIONES</b></p>
<p align="justify">Los siguientes T&eacute;rminos y Condiciones resultan complementarios a los T&eacute;rminos y Condiciones del servicio   Banca M&oacute;vil.
</p>
<p align="justify">a)	El Banco podr&aacute; a su opci&oacute;n, SIN COSTO PARA EL CLIENTE, enviarle a &eacute;ste, a trav&eacute;s de cualquier medio electr&oacute;nico, un mensaje de texto y/o correo electr&oacute;nico, en adelante EL MENSAJE Y EL CORREO,  por cada evento de los siguientes:
</p>
<p align="justify">i.	Por transacciones  y/u operaciones efectuadas por EL CLIENTE en los canales electr&oacute;nicos y/o en los medios que en un futuro implemente EL BANCO;
</p>
<p align="justify">ii.	Promociones lanzadas por el Banco en cualquiera de sus productos; 
</p>
<p align="justify">iii.	Cualquier otra consideraci&oacute;n que pueda ser sujeta a comunicaci&oacute;n;
</p>
<p align="justify">b)	Si ante inconvenientes en las comunicaciones, EL CLIENTE no recibiera EL MENSAJE y/o EL CORREO relacionados al romano i) literal a) inmediato anterior,  podr&aacute; confirmar si la operaci&oacute;n ha sido realizada a trav&eacute;s de los diferentes canales electr&oacute;nicos que EL BANCO tenga a disposici&oacute;n de EL CLIENTE o en cualquiera de las agencias que EL BANCO posee en todo el pa&iacute;s.</p>
<p align="justify"> c)	El dispositivo m&oacute;vil  deber&aacute; estar encendido y dentro del &aacute;rea de cobertura disponible por su proveedor de servicio de telefon&iacute;a, siendo EL CLIENTE responsable por el pago del  costo del servicio de “roaming”, si aplicara.
</p>
<p align="justify">d)	En caso de solicitar la baja del dispositivo m&oacute;vil, por robo, hurto, extrav&iacute;o o cambio de n&uacute;mero telef&oacute;nico, EL CLIENTE se compromete a comunicar dicha modificaci&oacute;n inmediatamente a EL BANCO a trav&eacute;s de los canales que se establezcan para tales efectos, para que &eacute;ste no contin&uacute;e enviando la informaci&oacute;n a dicha l&iacute;nea. EL CLIENTE ser&aacute; exclusivamente responsable por la falta de comunicaci&oacute;n de este hecho, as&iacute;  como tambi&eacute;n por los reclamos que pudieran surgir por tal motivo, no siendo el banco responsable por la falta de comunicaci&oacute;n de parte de EL CLIENTE.
</p>
<p align="justify">e)	La suspensi&oacute;n del servicio de mensajer&iacute;a, en forma definitiva o temporal, puede ser decidida por EL BANCO o la empresa de telefon&iacute;a m&oacute;vil y ser&aacute; comunicada previa y oportunamente a EL CLIENTE, restando as&iacute; cualquier tipo de responsabilidad a EL BANCO por los daños y perjuicios que la suspensi&oacute;n pudiera generar. Igual pol&iacute;tica se adoptar&aacute; si EL BANCO suspende el suministro del servicio de env&iacute;o de mensajes de texto con alguna empresa de telefon&iacute;a celular determinada o en alguna zona geogr&aacute;fica determinada. 
</p>
<p align="justify">f)	EL BANCO, a su exclusivo costo, enviar&aacute; a EL CLIENTE y como consecuencia de la adhesi&oacute;n del servicio de env&iacute;o de mensajes de texto, uno o m&aacute;s mensajes inform&aacute;ndole el atraso en el cumplimiento de sus obligaciones, en cualquiera de los productos y/o servicios que mantenga contratado con EL BANCO.  </p>
<p align="justify">g)	NOTIFICACIONES: El Banco tambi&eacute;n podr&aacute; notificar a petici&oacute;n de EL CLIENTE y a costo de &eacute;ste, servicios especiales tales como:   la  recepci&oacute;n de planillas de salario, de pensiones, saldo de cuentas, entre otros, a los cuales podr&aacute; suscribirse por medio de los canales que el Banco ponga a su disposici&oacute;n. </p>
<p>
    <b>8.</b>
    <b>GEOLOCALIZACI&Oacute;N</b></p>
    <p align="justify">a)	A petici&oacute;n  de EL CLIENTE y en el momento que EL BANCO tenga a disposici&oacute;n el servicio de GEOLOCALIZACI&Oacute;N , podr&aacute; prestarlo bajo las condiciones y normas que &eacute;ste establezca y que se har&aacute;n de conocimiento de EL CLIENTE a trav&eacute;s de los medios que EL BANCO tenga a bien utilizar. En tal sentido, el acceso a los servicios a ser prestados bajo la denominaci&oacute;n de Geolocalizaci&oacute;n, implica la aceptaci&oacute;n de las condiciones expuestas a continuaci&oacute;n:
</p>
    <p align="justify">i.	Opci&oacute;n m&oacute;vil que le permitir&aacute; ubicar todos los puntos de servicio de EL BANCO en un mapa satelital, incluyendo las horas de servicio y direcci&oacute;n exacta.
    </p>
    <p align="justify">ii.	Requiere tecnolog&iacute;a GPS en sus dispositivos m&oacute;viles y plan de datos contratado con la compañ&iacute;a de telefon&iacute;a de su preferencia.
    </p>
    <p align="justify">iii.	Podr&aacute; encontrar el punto de servicio m&aacute;s cercano a su ubicaci&oacute;n siempre y cuando EL CLIENTE as&iacute; lo solicite.
    </p>
    <p align="justify">iv.	A trav&eacute;s de este servicio EL CLIENTE podr&aacute;, geolocalizar sucursales, cajeros autom&aacute;ticos, b&uacute;squeda personalizada de puntos de servicio y cualquier alternativa que EL BANCO pueda en el futuro implementar.</p>
    <p align="justify">b)	EL BANCO podr&aacute; proporcionar a trav&eacute;s del servicio, determinadas caracter&iacute;sticas y funciones que utilicen informaci&oacute;n basada en la localizaci&oacute;n del dispositivo, tecnolog&iacute;a de GPS (en aquellas ubicaciones en las que dicha tecnolog&iacute;a est&eacute; disponible), as&iacute; como puntos de conexi&oacute;n Wi-Fi y repetidores de telefon&iacute;a m&oacute;vil. Para proporcionar tales caracter&iacute;sticas o funciones en las ubicaciones en las que est&eacute;n disponibles, EL BANCO podr&aacute; recoger, utilizar, transmitir, tratar y almacenar los datos geogr&aacute;ficos relativos a EL CLIENTE, la localizaci&oacute;n geogr&aacute;fica de su dispositivo.
    </p>
    <p align="justify">c)	EL CLIENTE acepta y presta su consentimiento para que EL BANCO lleve a cabo dicha actividades de recopilaci&oacute;n, utilizaci&oacute;n, transmisi&oacute;n, tratamiento y almacenamiento de tales datos geogr&aacute;ficos y de cuenta para prestar y mejorar tales caracter&iacute;sticas o servicios.
    </p>
    <p align="justify">d)	EL CLIENTE tiene derecho a revocar en cualquier momento su activaci&oacute;n expresa en cualquiera de los servicios prestados como servicios de valor añadido basados en Geolocalizaci&oacute;n, y de este modo eliminar su consentimiento a que EL BANCO trate o, en su caso, acceda a su informaci&oacute;n de posici&oacute;n geogr&aacute;fica aproximada. Con esta revocaci&oacute;n EL CLIENTE no ser&aacute; localizado ni sus datos personales ser&aacute;n tratados por EL BANCO, por tanto, EL CLIENTE no podr&aacute; acceder a la prestaci&oacute;n del servicio ofrecido.
    </p>
    <p align="justify">e)	EL BANCO, sus sucursales y/o sus administradores, empleados y personal autorizado no ser&aacute;n responsables, salvo prueba en contrario,  de cualquier tipo de perjuicio, p&eacute;rdidas, reclamaciones o gastos de ning&uacute;n tipo, tanto si proceden como si no del uso del servicio de Geolocalizaci&oacute;n, de la informaci&oacute;n adquirida o accedida por o a trav&eacute;s de &eacute;ste, de virus inform&aacute;ticos, de fallos operativos o de interrupciones en el servicio o transmisi&oacute;n, o fallos en la l&iacute;nea; en el uso del servicio de Geolocalizaci&oacute;n, tanto por conexi&oacute;n directa como por v&iacute;nculo u otro medio, constituye un aviso a cualquier usuario de que estas posibilidades pueden ocurrir.      </p>
    <p align="justify">f)	El Banco ser&aacute; responsable frente al cliente por daños y perjuicios imputables en aspectos tecnol&oacute;gicos, siempre que no salgan de la esfera de control del Banco,  excepto la responsabilidad penal o personal en que incurra el colaborador, empleado  o funcionario del banco,  por el uso indebido o inadecuado de la informaci&oacute;n de EL CLIENTE. </p>
<p>
    <b>9.</b>
    <b>SISTEMA CAMARA DE COMPENSACION AUTOMATIZADA (ACH): SERVICIO DE  TRANSACCIONES ELECTR&Oacute;NICAS DE CR&Eacute;DITO Y/O D&Eacute;BITO </b></p>
    <p>
    <b>A.</b>
    <b>GENERALIDADES </b></p>
    <p align="justify">EL BANCO provee el servicio de operaciones ACH v&iacute;a Internet, a trav&eacute;s del cual EL CLIENTE podr&aacute; realizar sus operaciones Interbancarias en El Salvador. Solamente Entidades Financieras participantes pueden actuar como Entidad Financiera Originadora y Entidad Financiera Recibidora de la red ACH y ACH de El Salvador como operador, compensar&aacute; y liquidar&aacute; por medio del Banco Central de Reserva de El Salvador, el efecto monetario de las instrucciones de pago en las cuentas de Dep&oacute;sito en las que las Entidades Financieras intervienen en la operaci&oacute;n, de acuerdo con las caracter&iacute;sticas de las transacciones cursadas o recibidas y de las instrucciones respectivas, el sistema ACH y su norma tiene como fundamento el Art. 60 de la Ley de Bancos, el reglamento y las instrucciones para el Sistema de Liquidaci&oacute;n Bruta en Tiempo Real, el Art. 3 literal g y el Art. 67 de la Ley del Banco Central de Reserva, la Ley contra el Lavado de Dinero y Activos y lo dispuesto en el reglamento para operar sistemas electr&oacute;nicos de pago tipo ACH publicado por el Banco Central de Reserva vigente desde el 17 de enero de 2011. EL BANCO es una instituci&oacute;n bancaria debidamente autorizada para prestar a sus cuentahabientes el servicio al que se refiere el presente contrato.
</p>
    <p align="justify">a)	El servicio de transferencia por ACH que EL BANCO prestar&aacute; a EL CLIENTE, consiste en: cr&eacute;dito y/o d&eacute;bito en cuentas de EL CLIENTE, para enviar fondos a las diferentes cuentas a terceros, transferencias bancarias y tarjeta de cr&eacute;dito, as&iacute; como otras que en el futuro habilite EL BANCO;
    </p>
    <p align="justify">b)	Toda mejora efectuada al sistema o adici&oacute;n de funcionalidades en el servicio de ACH, EL BANCO actualizar&aacute; con las herramientas y/o recursos disponibles; 
    </p>
    <p align="justify">c)	Los tiempos de procesamiento de las transacciones estar&aacute;n normadas por ACH, permitiendo la creaci&oacute;n de &eacute;stas, acorde al horario de servicio de Banca por Internet;
    </p>
    <p align="justify">d)	L&iacute;mites de las transacciones: las operaciones podr&aacute;n ser limitadas por su valor o monto, a criterio de EL BANCO, lo cual notificar&aacute; al originador en la forma que considere conveniente; 
    </p>
<p align="justify">e)	Atender reclamos por inconsistencias o anomal&iacute;as en las cuentas de EL CLIENTE derivadas de aplicaciones electr&oacute;nicas a que se refiere este contrato, en un per&iacute;odo no mayor a cuarenta y cinco d&iacute;as h&aacute;biles posteriores a la fecha de la operaci&oacute;n, pasado este per&iacute;odo la operaci&oacute;n se presume aceptada como bien efectuada. EL BANCO asimismo podr&aacute; notificar a EL CLIENTE los errores que notare en la verificaci&oacute;n y hacer las correcciones que a su juicio sean necesarios o convenientes realizar. Lo anterior sin perjuicio de los reclamos hechos en la v&iacute;a administrativa y/o judicial. </p>
<p>
    <b>B.</b>
    <b>OPERACIONES POR LIQUIDAR </b></p>
<p align="justify">EL CLIENTE se obliga a restituir a EL BANCO cualquier diferencia a su favor que pudiera resultar en la operaci&oacute;n del sistema o de tercera persona ligada en la operaci&oacute;n. </p>
<p>
    <b>C.</b>
    <b>CONFIRMACI&Oacute;N DE OPERACIONES</b></p>
<p align="justify">Las operaciones realizadas por EL CLIENTE quedar&aacute;n sujetas a su posterior verificaci&oacute;n y ser&aacute;n v&aacute;lidas despu&eacute;s de su registro definitivo, conforme al procedimiento que EL BANCO disponga. </p>
 <p><b>D.</b>
      <b>PROCESAMIENTO, TRANSMISI&Oacute;N Y LIQUIDACI&Oacute;N DE TRANSACCIONES ELECTR&Oacute;NICAS NO PROPIAS</b></p>
 <p>EL BANCO recibir&aacute; las transacciones electr&oacute;nicas del Originador en los d&iacute;as y horarios establecidos para el efecto por el Operador ACH, los cuales deber&aacute;n ser del conocimiento del originador. EL BANCO procesar&aacute; las transacciones electr&oacute;nicas recibidas del Originador y las transmitir&aacute; a dicho Operador. Las transacciones electr&oacute;nicas se consideran recibidas por EL BANCO cuando reciba la transmisi&oacute;n electr&oacute;nica, de conformidad con los correspondientes procedimientos de seguridad. Si por alguna raz&oacute;n no fuere posible dicha transmisi&oacute;n, las partes podr&aacute;n acordar otro mecanismo para realizar las mismas. La fecha de aplicaci&oacute;n de operaciones ACH ser&aacute; a m&aacute;s tardar el d&iacute;a h&aacute;bil posterior a la fecha efectiva de transacci&oacute;n seg&uacute;n las ventanas horarias que la red ACH tenga disponible o habilitare en el futuro.</p>
<p><b>E.</b>
      <b>RECHAZO DE ARCHIVOS DE TRANSACCIONES ELECTR&Oacute;NICAS</b>
</p>
<p align="justify">EL BANCO podr&aacute; rechazar mediante la C&aacute;mara de Compensaci&oacute;n Automatizada (ACH) cualquier transacci&oacute;n electr&oacute;nica que no cumpla con los requisitos establecidos, o aplicar los c&oacute;digos de rechazo establecidos por el Operador de ACH, si los mismos fueren procedentes. EL BANCO notificar&aacute; a  ACH,  en los plazos establecidos  por &eacute;sta, la cual a su vez,  notificara a la Instituci&oacute;n Financiera  que origin&oacute; la transacci&oacute;n, que dicha transacci&oacute;n ha sido rechazada. EL BANCO no tendr&aacute; obligaci&oacute;n alguna de retransmitir al Operador de ACH una transacci&oacute;n electr&oacute;nica devuelta si EL BANCO cumpli&oacute; con los t&eacute;rminos de este contrato con respecto a la solicitud original. </p>
<p><b>F.</b>
      <b>CANCELACI&Oacute;N O ENMIENDA DE TRANSACCIONES</b>
</p>
      <p align="justify">El Originador no tendr&aacute; derecho a cancelar o enmendar ninguna transacci&oacute;n electr&oacute;nica despu&eacute;s de que &eacute;sta sea recibida por EL BANCO.</p>
      <p><b>10.</b>
      <b>COMISI&Oacute;N POR LOS SERVICIOS</b>
      </p>
<p align="justify">EL CLIENTE o USUARIO en este acto declara y acepta que lee, conoce y comprende el cobro a ser aplicados conforme lo siguiente:</p>
      
      <table align="center" border="1" cellpadding="0" cellspacing="0" width="752">
    <tbody>
        <tr>
            <td width="182" >
                <p align="center">
                    <b>Tipo de transacci&oacute;n </b>
                </p>
            </td>
            <td width="145">
                <p align="center">
                    <b>Valor de la comisi&oacute;n</b>
                </p>
            </td>
            <td width="579">
                <p align="center">
                    <b>Condici&oacute;n</b>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    Banca por Internet
                </p>
            </td>
            <td>
                <p>
                    $ 1.50 m&aacute;s IVA
                </p>
            </td>
            <td>
                <p>
                    Comisi&oacute;n mensual. EL BANCO podr&aacute; exonerar esta comisi&oacute;n de acuerdo a las pol&iacute;ticas internas establecidas e informar  a EL CLIENTE por los medios que estime conveniente 
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    Banca M&oacute;vil
                </p>
            </td>
            <td>
                <p>
                    $ 0.00 m&aacute;s IVA
                </p>
            </td>
            <td>
               Comisi&oacute;n mensual.  EL BANCO podr&aacute; exonerar esta comisi&oacute;n de acuerdo a las pol&iacute;ticas internas establecidas e informar  a EL CLIENTE por los medios que estime conveniente
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    Transferencia Internacional
                </p>
            </td>
            <td>
                <p>
                    $ 25.00 m&aacute;s IVA
                </p>
            </td>
            <td>
               Comisi&oacute;n por evento
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    Operaciones ACH
                </p>
            </td>
            <td>
                <p>
                    $ 2.50 m&aacute;s IVA
                </p>
            </td>
            <td>
                Comisi&oacute;n por Evento. Con Instituciones afiliadas a la red ACH de El Salvador y por cada registro que contenga la transacci&oacute;n
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    Rechazo de Operaciones ACH
                </p>
            </td>
            <td>
                <p>
                    $ 2.50 m&aacute;s IVA
                </p>
            </td>
            <td>
                <p>
                   Comisi&oacute;n por evento por rechazos en la red ACH de El Salvador
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    Notificaciones a solicitud del cliente
                </p>
            </td>
            <td>
                <p>
                    $ 0.00 m&aacute;s IVA
                </p>
            </td>
            <td>
                <p>
                    Comisi&oacute;n por Evento
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    Mensajes de Texto y correos electr&oacute;nicos  a iniciativa  del Banco
                </p>
            </td>
            <td>
                <p>
                    $ 0.00
                </p>
            </td>
            <td>
                <p>
                    Sin costo
                </p>
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
        </tr>
    </tbody>
</table>
<p><b>11.</b>
      <b>VARIABILIDAD</b>
</p>
      <p align="justify">Las comision(es) convenida(s) podr&aacute;(n) aumentarse o disminuirse por EL BANCO y ser&aacute; notificada de conformidad al Art. 64 de la Ley de Bancos, y con quince d&iacute;as calendario de anticipaci&oacute;n, por cualquiera de los siguientes medios: prensa escrita, correo electr&oacute;nico, canales electr&oacute;nicos que EL BANCO tenga a disposici&oacute;n, agencias de EL BANCO, Estados de Cuenta.</p>
<p><b>12.</b>
      <b>AUTORIZACI&Oacute;N DE CARGO</b>
</p>
      <p align="justify">a)	EL CLIENTE autoriza a EL BANCO para que en cumplimiento a este contrato, cargue mensualmente, por evento o por transacci&oacute;n, seg&uacute;n sea el caso, la comisi&oacute;n descrita en recuadro anterior, por los costos de los servicios, en la cuenta de donde gener&oacute; la transacci&oacute;n, siempre que EL CLIENTE la mantenga activa y tenga saldo disponible; sin embargo, en caso de falta de disponibilidad de fondos, inactividad, terminaci&oacute;n de contrato, embargo, restricci&oacute;n judicial o administrativa, EL CLIENTE faculta y autoriza a EL BANCO para cargar el monto de la comisi&oacute;n,  en cualquier otra cuenta de dep&oacute;sito activa en EL BANCO, excepto cuentas de dep&oacute;sitos a plazo.</p>
      <p align="justify">b)	Tambi&eacute;n autoriza a EL BANCO para que en los casos de variabilidad de la comisi&oacute;n convenida y de las que en el futuro las partes convengan, pueda cargar en su cuenta de dep&oacute;sito activa, los montos respectivos de acuerdo a la tabla de comisiones vigente de EL BANCO y publicada.        </p>
      <p align="justify">c)	En caso de que no se pueda efectuar ninguno de los cargos, queda a discreci&oacute;n de EL BANCO la suspensi&oacute;n temporal o definitiva del servicio.</p> 
<p><b>13.</b>
      <b>PLAZO GENERAL DEL CONTRATO BANCA INTERNET Y BANCA MOVIL</b>
</p>
<p align="justify">El plazo del presente contrato ser&aacute; por tiempo indeterminado, sin perjuicio de darlo por terminado  en cualquier momento, con 30 d&iacute;as  calendario de anticipaci&oacute;n a la fecha de su finalizaci&oacute;n.</p>
<p><b>14.</b>
      <b>CAUSAS DE TERMINACION Y CADUCIDAD DEL CONTRATO</b>
</p>
      <p align="justify">TERMINACION: 
</p>
      <p align="justify">a)	En caso de mora actual e hist&oacute;rica en cualquiera de los productos financieros con EL BANCO a cargo de la parte acreditada.        </p>
      <p align="justify">b)	El plazo del presente contrato podr&aacute; terminar en cualquier momento, a opci&oacute;n de cualquiera de las partes.</p>
      <p align="justify"> CAUSALES DE CADUCIDAD: </p>
      <p align="justify">c)	Si EL CLIENTE incurre en mora en uno o varios productos.        </p>
      <p align="justify">d)	Por demanda y/o acci&oacute;n judicial en contra de EL CLIENTE, iniciada por terceros o por EL BANCO, siempre y cuando afecte la credibilidad de EL CLIENTE ante el Banco.        </p>
      <p align="justify">e)	Por inactividad de la cuenta de dep&oacute;sito o intervenci&oacute;n judicial de la misma. </p>
<p><b>15.</b>
      <b>CLAUSULAS GENERALES</b>
</p>
<p align="justify">a)	<strong>RESERVA DE CHEQUES.</strong> En el servicio de reserva de cheques, el sistema indicar&aacute; al solicitante, que tal servicio es valedero &uacute;nicamente por cinco (5) d&iacute;as h&aacute;biles, dentro de los cuales el beneficiario deber&aacute; presentar a EL BANCO el cheque para su pago, vencido el t&eacute;rmino de la reserva, los fondos son liberados. 
</p>
<p align="justify">b)	<strong>SUSPENSION DE PAGO DE CHEQUE.</strong> En el servicio de suspensi&oacute;n de pago de un cheque, el sistema indicar&aacute; al solicitante que ser&aacute; por tiempo indefinido y &uacute;nicamente podr&aacute; ser levantada la suspensi&oacute;n a petici&oacute;n del titular. Si posterior a la orden de suspensi&oacute;n, el cheque fuere presentado al BANCO para su pago y cumpliere con todos los requisitos de validez y de regularidad a que se refieren los art&iacute;culos 793 y 794 del C&oacute;digo de Comercio y la firma no fuere ostensiblemente distinta a la registrada en EL BANCO, &eacute;ste a petici&oacute;n del beneficiario podr&aacute; protestarlo y tal acto cambiario podr&iacute;a generar una acci&oacute;n judicial en contra del librador.
</p>
<p align="justify">c)	<strong>MEJORAS AL SERVICIO.</strong> Toda mejora efectuada al sistema o adici&oacute;n de funcionalidades en el servicio, EL BANCO lo actualizar&aacute; con las herramientas y/o recursos disponibles.
</p>
<p align="justify">d)	<strong>PROVEEDORES.</strong> EL BANCO, con la finalidad de brindar mejores servicios a EL CLIENTE, podr&aacute; celebrar contratos con otras compañ&iacute;as o proveedores que coadyuven a ampliar a&uacute;n m&aacute;s las opciones de servicios que por medio de este contrato realicen. 
</p>
<p align="justify">e)	<strong>CARGOS EN CUENTA.</strong> Todas las operaciones, exceptuando los depositos a plazo y  donde expl&iacute;citamente se indique otra cosa, ser&aacute; aplicada o cargada  a la cuenta de EL CLIENTE en donde se origine la transacci&oacute;n. 
</p>
<p align="justify">f)	<strong>CUMPLIMIENTO DE CONDICIONES.</strong> EL CLIENTE usar&aacute; a su entera voluntad estos servicios cumpliendo todos los requerimientos y condiciones señaladas en este contrato y los que en el futuro establezca EL BANCO para la seguridad jur&iacute;dica y operativa de las transacciones realizadas por EL CLIENTE.</p>
<p align="justify"> g)	<strong>INCORPORACI&Oacute;N DE PRODUCTOS.</strong> EL CLIENTE acepta que todos los productos que mantenga con EL BANCO ser&aacute;n incluidos en EL SERVICIO de manera autom&aacute;tica al momento de contratarlo. 
</p>
<p align="justify">h)	<strong>CUENTAS MANCOMUNADAS TIPO “Y”. </strong>Las cuentas de dep&oacute;sito mancomunadas  tipo “Y”, en la cual dos o m&aacute;s titulares son copropietarios de los fondos, podr&aacute;n ser afiliados a la Banca por Internet o Banca M&oacute;vil, pero solo podr&aacute;n ser consultados  por cualquiera de los titulares, mas no podr&aacute;n ser debitados , salvo autorizaci&oacute;n escrita de todos los titulares de las cuentas. </p>
<p><b>16.</b>
      <b>REQUERIMIENTOS DEL HARDWARE Y SOFTWARE</b>
</p>
      <p align="justify">El  BANCO no es responsable por la compatibilidad de los equipos de EL CLIENTE por medio de los cuales se conectar&aacute; a la Banca por Internet, siendo los &uacute;nicos requisitos de software el utilizar navegadores de internet con 128 bits de encriptaci&oacute;n como m&iacute;nimo, as&iacute; como tener programa anti-virus y tenerlo actualizado. Para el acceso a la Banca M&oacute;vil, EL CLIENTE deber&aacute; descargar una aplicaci&oacute;n para su dispositivo m&oacute;vil dependiendo de la plataforma que &eacute;ste utilice, asimismo deber&aacute; poseer un tel&eacute;fono compatible y tener suscrito bajo la modalidad de prepago o postpago el plan de datos, contratado con la empresa de telecomunicaciones que EL CLIENTE prefiera. EL CLIENTE reconoce desde ahora que todo el software y cualquier tipo de c&oacute;digo usado en la p&aacute;gina web es propiedad de EL BANCO y/o de sus proveedores, y est&aacute; protegido por leyes nacionales y tratados internacionales sobre la propiedad intelectual. Cualquier reproducci&oacute;n o redistribuci&oacute;n est&aacute; expresamente prohibida por la ley y puede conllevar sanciones civiles y penales. </p>
      <p><b>17.</b>
      <b>CLAVE DE ACCESO(PIN)</b>
      </p>
      <p align="justify">EL CLIENTE podr&aacute; acceder a los servicios del presente contrato a trav&eacute;s de mecanismos de identificaci&oacute;n electr&oacute;nica secreta, denominado en este contrato “C&oacute;digo Personal”, “PIN”, o “Clave”, el cual ser&aacute; definido por EL CLIENTE en formato alfanum&eacute;rico en el caso de afiliaci&oacute;n en l&iacute;nea. Para el servicio contratado en agencias, EL BANCO proporciona una clave inicial que luego es sustituida por EL CLIENTE, siendo de su &uacute;nico conocimiento y responsabilidad. Para el servicio de Banca M&oacute;vil ser&aacute; utilizada la misma din&aacute;mica de asignaci&oacute;n de clave que la de Banca por Internet. La pol&iacute;tica de seguridad de EL BANCO solicita a EL CLIENTE cambio de clave con periodicidad para seguridad del mismo e igualmente EL CLIENTE podr&aacute; cambiar su clave las veces que desee.</p>
<p><b>18.</b>
      <b>OTROS MEDIOS</b>
</p>
      <p align="justify">En el futuro EL BANCO podr&aacute; establecer otros medios de acceso y/o autenticaci&oacute;n, tales como: lectores de huellas digitales, token, claves de uso &uacute;nico u otros sistemas y mecanismos de seguridad que EL BANCO considere oportuno su utilizaci&oacute;n en los presentes servicios. Otros medios de accesos y/o autenticaci&oacute;n construidos dentro del sistema, EL BANCO los comunicar&aacute; inmediatamente a EL CLIENTE y para mantener la seguridad de las transacciones financieras de EL CLIENTE, &eacute;ste adquiere el compromiso de aceptar los otros medios de acceso y/o autenticaci&oacute;n, para lo cual ser&aacute; oportunamente capacitado por EL BANCO. Si EL CLIENTE no acepta los otros medios de acceso y/o autenticaci&oacute;n propuestos por EL BANCO, &eacute;ste podr&aacute; dar por caducado este contrato, salvo que EL CLIENTE suscriba en forma electr&oacute;nica nota en la que exprese que asume el riesgo por la no aceptaci&oacute;n de los otros medios de acceso y/o autenticaci&oacute;n propuestos u otro medio que EL BANCO estime conveniente. </p>
    <p><b>19.</b>
      <b>VALIDEZ Y USO DE CLAVE</b>
</p>
<p align="justify" >Es entendido que por el car&aacute;cter electr&oacute;nico de &eacute;stos servicios, &eacute;ste C&oacute;digo Personal, PIN o CLAVE, sustituye la firma aut&oacute;grafa de EL CLIENTE, por tanto toda la informaci&oacute;n u operaciones derivadas del uso de esta identificaci&oacute;n electr&oacute;nica secreta se entender&aacute; que ha sido firmada, aceptada y autorizada en forma leg&iacute;tima por EL CLIENTE, con su expreso consentimiento puro y simple, siendo la constancia emitida por la bit&aacute;cora o registros electr&oacute;nicos de EL BANCO, prueba suficiente para demostrar y comprobar la existencia de toda consulta u operaci&oacute;n bancaria derivada de este contrato, salvo prueba en contrario,  facultando al Banco a cargar o abonar a las cuentas bancarias de EL CLIENTE el valor de esos comprobantes de donde se originan tales servicios.</p>
<p><b>20.</b>
      <b>PRIVACIDAD Y RESPONSABILIDAD DE LA CLAVE</b>
</p>
      <p align="justify">a)	El c&oacute;digo personal, PIN o CLAVE es propiedad de EL CLIENTE e intransferible, por lo que podr&aacute; cambiarlo cuantas veces lo considere necesario, ya que es individual, confidencial y de uso exclusivo de EL CLIENTE.
</p>
      <p align="justify">b)	Ser&aacute; &uacute;nica y absoluta responsabilidad de EL CLIENTE la custodia, confidencialidad y buen uso de este C&oacute;digo Personal o PIN.        </p>
      <p align="justify">c)	Toda transacci&oacute;n que se efect&uacute;e utilizando este C&oacute;digo Personal o PIN se entender&aacute; que la ha autorizado y por tanto consentido por EL CLIENTE; en tal sentido, cualquier mal uso que haga de este c&oacute;digo es responsabilidad de EL CLIENTE.        </p>
      <p align="justify">d)	En caso de bloqueo del usuario, se podr&aacute; activar este y cambiar la clave por medio de Telebanca, en Kioskos y en los medios que en un futuro implemente EL BANCO. </p>
<p><b>21.</b>
      <b>HORARIO DE SERVICIO</b>
</p>
      <p align="justify">a)	Los 365 d&iacute;as del año las 24 horas, sin embargo las operaciones realizadas posterior a la hora de cierre de operaciones de EL BANCO, ser&aacute;n contabilizadas con fecha del d&iacute;a siguiente. Para este caso, se le advertir&aacute; a EL CLIENTE por medio de un mensaje que su operaci&oacute;n se realizar&aacute;, pero bajo las condiciones antes descritas.</p>
      <p align="justify">b)	Las transferencias internacionales, constituyen una excepci&oacute;n, por la diferencia de horas entre pa&iacute;ses, las cuales deber&aacute;n ser enviadas a m&aacute;s tardar a las 12:00 meridiano, hora local; despu&eacute;s de esta hora y hasta las 3:00 p.m. ser&aacute;n recibidas, pero ser&aacute;n procesadas por EL BANCO corresponsal hasta el d&iacute;a h&aacute;bil siguiente.        </p>
      <p align="justify">c)	Para operaciones ACH se podr&aacute;n originar los 365 d&iacute;as del año, pero las aplicaciones ser&aacute;n en el d&iacute;a h&aacute;bil siguiente a la fecha efectiva de transacci&oacute;n seg&uacute;n las ventanas horarias que la red ACH tenga disponibles o habilitare en el futuro.</p>
<p><b>22.</b>
      <b>ACTUALIZACION DE VERSIONES  E INTERRUPCION DEL SERVICIO</b>
</p>
<p align="justify">a)	Se  entiende que una actualizaci&oacute;n de versi&oacute;n es una mejora t&eacute;cnica y/o visual del servicio prestado al  cliente, en tal sentido por dicha actualizaci&oacute;n el cliente no incurrir&aacute; en costo por el uso de los canales.</p>
      <p align="justify"> b)	En caso de detectarse que alguna de las funciones disponibles en estos servicios ha sido utilizada violando las normas internas de EL BANCO o la Ley Contra el Lavado de Dinero y de Activos y reglamentos establecidos para operaciones financieras, podr&aacute;n las mismas ser suspendidas o restringidas unilateralmente a opci&oacute;n de EL BANCO, sin necesidad de notificaci&oacute;n previa y sin ninguna responsabilidad de su parte.</p>
<p><b>23.</b>
      <b>NO RESPONSABILIDAD DE EL BANCO</b>
</p>
<p align="justify">a)	Queda expresamente pactado que EL BANCO no prestar&aacute; el servicio si los sistemas, computadora o equipos de EL CLIENTE no son compatibles con las especificaciones t&eacute;cnicas de los sistemas de EL BANCO.</p>
      <p align="justify"> b)	No es responsabilidad de EL BANCO el consumo del plan de datos que requiera la aplicaci&oacute;n de Banca M&oacute;vil para su descarga y uso. </p>
<p><b>24.</b>
      <b>CUSTODIA DE REGISTROS</b>
</p>
      <p align="justify">Los sistemas electr&oacute;nicos de EL BANCO, graban las instrucciones de EL CLIENTE realizadas por la Banca por Internet y por Banca M&oacute;vil. Estos registros son guardados en una base de datos, por el t&eacute;rmino de 10 años que indica el Art&iacute;culo 451 del C&oacute;digo de Comercio y EL CLIENTE podr&aacute; solicitarlos indicando tipo y fecha de la transacci&oacute;n.</p>
<p><b>25.</b>
      <b>DOMICILIO  JUDICIAL</b>
      </p>
      <p align="justify">Para los efectos legales de este contrato las partes señalan un domicilio especial  el de la ciudad de __________________, a la jurisdicci&oacute;n de cuyos Tribunales expresamente se someten.</p>
<p><b>26.</b>
      <b>DERECHO DE APROBACI&Oacute;N DE SOLICITUD DE SERVICIO</b>
</p>

<p align="justify">EL BANCO se reserva el derecho de aprobaci&oacute;n de afiliaci&oacute;n y/o anulaci&oacute;n de este contrato, cuando no re&uacute;na los requisitos establecidos por la instituci&oacute;n financiera, tales como: clientes de alto riesgo, detecci&oacute;n o sospecha de lavado de dinero, fraude electr&oacute;nico y otra consideraci&oacute;n que EL BANCO establezca.</p>
<p><b>27.</b>
      <b>ACEPTACION </b>
      </p>
<p align="justify">a)	El manejo, uso de los recursos y el control de lo estipulado en este contrato, se efectuar&aacute; por medio de operaciones electr&oacute;nicas v&iacute;a aceptaci&oacute;n electr&oacute;nica por medio del n&uacute;mero de identificaci&oacute;n personal (por sus siglas en idioma ingles: “PIN” Personal Identification Number).</p>
      <p align="justify"> b)	Todas las  transferencias electr&oacute;nicas descritas en el presente contrato y dem&aacute;s operaciones que efect&uacute;e EL CLIENTE o USUARIO se har&aacute;n mediante el uso de la Banca por Internet y/o Banca M&oacute;vil con el acceso de su PIN o clave de acceso.</p>
      <p align="justify">c)	El uso de los medios de identificaci&oacute;n que se establezca en sustituci&oacute;n de la firma aut&oacute;grafa, producir&aacute; los mismos efectos que los que las Leyes otorgan a los documentos correspondientes y tendr&aacute;n el mismo valor probatorio. EL CLIENTE O USUARIO reconoce como v&aacute;lidas las operaciones electr&oacute;nicas que as&iacute; se efect&uacute;en, las cuales ser&aacute;n respaldadas por medio de la base electr&oacute;nica de datos de EL BANCO, salvo prueba en contrario.        </p>
      <p align="justify">d)	Respecto de este contrato ser&aacute; aplicable en lo pertinente, lo dispuesto en el literal L) del art&iacute;culo 56 de la Ley de Bancos.</p>
      <p align="justify">Cualquier modificaci&oacute;n a los t&eacute;rminos y condiciones de este contrato, podr&aacute; aceptarse electr&oacute;nicamente por parte de EL CLIENTE, siempre que se cumplan los plazos  previos de notificaci&oacute;n</p>
<p><b>28.</b>
      <b>RESPONSABILIDADES GENERALES DE EL BANCO</b>
      </p>
<p align="justify">a)	Prestar los servicios dentro de los l&iacute;mites bajo su control. Situaciones ajenas EL BANCO, que le imposibiliten brindar el servicio le excluyen de esta obligaci&oacute;n.</p>
      <p align="justify"> b)	Poner a disposici&oacute;n de EL CLIENTE en la p&aacute;gina web un folleto electr&oacute;nico de seguridad relacionado al uso de canales electr&oacute;nicos, en caso que EL CLIENTE lo desee en f&iacute;sico, podr&aacute; solicitarlo en el Banco en cualquiera de las agencias de todo el pa&iacute;s.</p>
      <p align="justify"> c)	Probar por medio de Estados de Cuenta f&iacute;sicos o electr&oacute;nicos, los saldos de las cuentas corrientes y/o de ahorros.        </p>
      <p align="justify">d)	Respaldar y verificar las operaciones realizadas por EL CLIENTE a trav&eacute;s de sus sistemas.        </p>
      <p align="justify">e)	Atender reclamos por inconsistencias o anomal&iacute;as en las cuentas de EL CLIENTE en un per&iacute;odo no mayor a cuarenta y cinco (45) d&iacute;as h&aacute;biles posteriores a la fecha de la operaci&oacute;n, pasado este per&iacute;odo la operaci&oacute;n se presume aceptada como bien efectuada salvo si existiere caso fortuito o fuerza mayor comprobable que no permitiese la atenci&oacute;n del reclamo dentro del plazo establecido, lo anterior sin perjuicio de los reclamos mediante la v&iacute;a administrativa y/o judicial.  EL BANCO podr&aacute; notificar a EL CLIENTE los errores que notare en la verificaci&oacute;n y hacer las correcciones que a su juicio sean necesarias o convenientes realizar. </p>
<p><b>29.</b>
      <b>RESPONSABILIDADES GENERALES DE EL CLIENTE</b>
      </p>
      <p align="justify">a)	Gestionar de forma personal a trav&eacute;s de los medios que EL BANCO ponga a disposici&oacute;n, la asignaci&oacute;n y creaci&oacute;n del nuevo C&oacute;digo Personal o clave de acceso. 
</p>
      <p align="justify">b)	Reportar inmediatamente a EL BANCO, por medio de sus distintos canales electr&oacute;nicos, el robo o extrav&iacute;o de su clave o PIN.
      </p>
      <p align="justify">c)	Notificar a EL BANCO en caso de robo o extrav&iacute;o del dispositivo m&oacute;vil cuyo n&uacute;mero se encuentre adscrito al presente servicio, a fin de proceder a su suspensi&oacute;n, o en todo caso, a su cambio a otro n&uacute;mero de telefon&iacute;a celular que a &eacute;stos efectos indique EL CLIENTE, de forma tal que EL BANCO no se hace responsable por la informaci&oacute;n a la cual pudiesen acceder terceras personas en virtud del incumplimiento de esta obligaci&oacute;n.
      </p>
      <p align="justify">d)	Digitar correctamente los datos para transferencias de fondos a cuentas propias o a cuenta de terceros, teniendo presente que los sistemas verifican que las cuentas sean v&aacute;lidas, mas no que pertenezcan a determinada persona. En caso de errores en las transferencias a terceros, EL CLIENTE asume toda la responsabilidad por la p&eacute;rdida de dichos valores. 
      </p>
      <p align="justify">e)	Presentar en agencias el formulario “Transacciones en Efectivo” cuando efect&uacute;e operaciones por los montos establecidos en la Ley Contra el Lavado de Dinero y de Activos, para dar cumplimiento al art&iacute;culo 13 de dicha Ley.
      </p>
      <p align="justify">f)	Brindar toda la informaci&oacute;n que se le requiera sobre su identidad, la actividad econ&oacute;mica a la que se dedica, la procedencia o destino de los fondos transferidos en cualquier tipo de cuenta o cualquier otra informaci&oacute;n, en cumplimiento al art&iacute;culo 10 de la Ley contra el Lavado de Dinero y Activos.
      </p>
      <p align="justify">g)	No realizar operaciones o transacciones indebidas que violen la legislaci&oacute;n salvadoreña y a la buena pr&aacute;ctica mercantil bancaria nacional e internacional. 
      </p>
      <p align="justify">h)	Dar aviso escrito o electr&oacute;nico a EL BANCO de cualquier cambio de direcci&oacute;n postal o electr&oacute;nica, en caso de omitir dicho aviso, tendr&aacute; por buenas y v&aacute;lidas las notificaciones que se le hagan en la direcci&oacute;n indicada en los registros de EL BANCO.
      </p>
      <p align="justify">i)	Registrar en EL BANCO su domicilio, tel&eacute;fono y direcci&oacute;n, tanto f&iacute;sica como de correo electr&oacute;nico y deber&aacute; notificar por escrito todo cambio de los mismos. Las notificaciones y correspondencia remitidas a tales direcciones por EL BANCO, tendr&aacute;n plena validez. 
      </p>
      <p align="justify">j)	Actualizar anualmente la informaci&oacute;n y datos b&aacute;sicos que var&iacute;en. El incumplimiento de esta obligaci&oacute;n dar&aacute; derecho a EL BANCO para cancelar los contratos sin que se genere indemnizaci&oacute;n alguna en beneficio de EL CLIENTE. </p>
<p><b>30.</b>
      <b>ACEPTACION </b>
</p>
<p align="justify">Previo a la suscripci&oacute;n de este contrato, EL CLIENTE declara, que ha le&iacute;do, comprende, conoce y acepta las implicaciones y los efectos legales de este contrato.

En fe de lo anterior firmamos el presente documento en la ciudad de__________________________________, el d&iacute;a ___ de ____________ del 20______.
</p>
<p align="justify">&nbsp;</p>
<p align="left">__________________________________________ </p>
<p align="left">CESAR ALBERTO GRANJA - APODERADO DEL BANCO</p>
<p align="left">&nbsp;</p>
<p align="left">______________<u>02403431-4</u>__________________ </p>
<p align="left">No. DUI</p>
<p align="left">&nbsp;</p>
<p align="left">__________<u>0614-310155-001-6</u>_______________ </p>
<p align="left">NIT BANCO    </p>
<p align="left">&nbsp;</p>
<p align="left">__________________________________________ </p>
<p align="left">CLIENTE</p>
<p align="left">&nbsp;</p>
<p align="left">__________________________________________ </p>
<p align="left">No. DUI</p>
<p align="left">&nbsp;</p>
<p align="left">__________________________________________ </p>
<p align="left">NIT CLIENTE</p>
<p align="left">&nbsp;</p>
<p align="left">__________________________________________ </p>
<p align="left">APODERADO CLIENTE (si aplica)</p>
<p align="left">&nbsp;</p>
<p align="left">__________________________________________ </p>
<p align="left">No. DUI</p>
<p align="left">&nbsp;</p>
<p align="left">__________________________________________ </p>
<p align="left">FIRMANTE A RUEGO ( en caso de no saber o no poder firmar)</p>
<p align="left">&nbsp;</p>
<p align="left">__________________________________________ </p>
<p align="left"><strong>TESTIGO 1 ( en caso de no videntes)</strong>  </p>
<p align="left">&nbsp;</p>
<p align="left">__________________________________________ </p>
<p align="left">TESTIGO 2 ( en caso de no videntes) </p>
<br />
<p align="justify">El modelo de este contrato fue depositado en la Superintendencia del Sistema Financiero en fecha 21 octubre 2013 en cumplimiento a los Arts. 22 de la Ley de Protecci&oacute;n al Consumidor y 12 de su Reglamento.</p>

ENDHTML;
 
$dompdf->load_html($html);
$dompdf->render();
 
$dompdf->stream("hello.pdf");

?>