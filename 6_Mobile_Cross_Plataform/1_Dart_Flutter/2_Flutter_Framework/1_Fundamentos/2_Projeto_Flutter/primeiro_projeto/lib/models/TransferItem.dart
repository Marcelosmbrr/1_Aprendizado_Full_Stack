// ==== CLASSE PARA GERAÇÃO GENÉRICA DE CARDS/ITENS ==== //
import 'package:flutter/material.dart';

// ignore: must_be_immutable
class TransferItem extends StatelessWidget {
  late double valor;
  late int conta;

  // ignore: use_key_in_widget_constructors
  TransferItem(this.valor, this.conta);

  @override
  Widget build(BuildContext context) {
    return Card(
      child: ListTile(
        leading: const Icon(Icons.monetization_on),
        title: Text(valor.toString()),
        subtitle: Text(conta.toString()),
      ),
    );
  }
}