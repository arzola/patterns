<?php

/*
 * Ejercicio Invoice LLC
 * Implementar el código necesario para cumplir todas las tareas
 * TIP: Todas las tareas se pueden combinar entre sí
 * TIP: Considera usar «OOP»
 * TIP: Reduce tu uso de condicionales
 */

abstract class InvoiceContract
{
    abstract public function print();
}

class Invoice extends InvoiceContract
{
    public function print($total = 0)
    {
        return <<<INVOICE
        ======================\n
        =                    =\n
        =     INVOICE LLC    =\n
        =                    =\n
        =                    =\n
        =                    =\n
        =$total@@@@@@@@@@@@@@@=\n
        ======================\n
INVOICE;
    }
}

$originalInvoice = new Invoice();
echo $originalInvoice->print();

/* EL CÓDIGO ANTERIOR IMPRIME ESTO */

//        ======================
//        =                    =
//        =   INVOICE LLC      =
//        =                    =
//        =                    =
//        =                    =
//        =0@@@@@@@@@@@@@@@@@@@=
//        ======================

/* TIP: PUEDEN CREAR TODOS LOS OBJETOS y FUNCIONES QUE CONSIDEREN NECESARIOS */

/*
 * Tarea 1
 * Debe de existir la opción para agregar el total sin modificar el método original print() y
 * tiene que aparecer en lugar de los @@@@@@
 * EJEMPLO: con un total de 120
 *
 */

//        ======================
//        =                    =
//        =   INVOICE LLC      =
//        =                    =
//        =                    =
//        =                    =
//        =120                 =
//        ======================

/*
 * Tarea 2
 * Debe de existir la opción para cambiar el nombre de INVOICE LLC sin modificar el método original print()
 * EJEMPLO:
 *
 */

//		  ======================
//        =                    =
//        =    NUEVO NOMBRE    =
//        =                    =
//        =                    =
//        =                    =
//        =@@@@@@@@@@@@@@@@@@@@=
//        ======================

/*
 * Tarea 3
 * Deben de poder combinarse las tareas 1 y 2
 * EJEMPLO
 */

//        ======================
//        =                    =
//        =    NUEVO NOMBRE    =
//        =                    =
//        =                    =
//        =                    =
//        =120                 =
//        ======================

/*
 * Tarea 4
 * Deben de existir un método para imprimir facturas con # en lugar de =
 * Se deben de poder hacer también las tareas 1, 2 y 3
 * EJEMPLO
 */

//       ######################
//       #                    #
//       #    NUEVO NOMBRE    #
//       #                    #
//       #                    #
//       #                    #
//       #120                 #
//       ######################

/*
 * Tarea 5
 * Debe de ser fácil hacer un nuevo cambio a la factura, por ejemplo agregarle I.V.A hasta abajo
 * Se debe de poder combinar con las tareas anteriores
 * EJEMPLO
 */

//        ======================
//        =                    =
//        =    NUEVO NOMBRE    =
//        =                    =
//        =                    =
//        =                    =
//        =123                 =
//        ======================
//        =                    =
//        = EL IVA ES: 1.16    =
//        = TOTAL 142.68       =
//        ======================
