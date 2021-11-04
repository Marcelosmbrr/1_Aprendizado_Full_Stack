// ==== CLASSE PARA GERAÇÃO GENÉRICA DE CARDS/ITENS ==== //
import 'package:flutter/material.dart';

// ignore: must_be_immutable
class TransferItem extends StatelessWidget {
  late double valor;
  late int conta;
  late String uuid;

  // ignore: use_key_in_widget_constructors
  TransferItem(this.valor, this.conta, this.uuid);

  @override
  Widget build(BuildContext context) {
    return Container(
      padding: const EdgeInsets.all(3),
      child: Column(
        children: <Widget>[
          Card(
            // ==== Linha única do card ==== //
            child: Row(
              children: [
                // ==== Primeira coluna do card ==== //
                Expanded(
                  flex: 7,
                  child: ListTile(
                    leading: const Icon(Icons.monetization_on),
                    title: Text("R\$ ${valor.toString()}"),
                    subtitle: Text("Account: ${conta.toString()}"),
                    trailing: TextButton(
                        onPressed: () {
                          ScaffoldMessenger.of(context).showSnackBar(SnackBar(
                            content: Text("Transaction ID: $uuid"),
                          ));
                        },
                        child: const Text("ID", style: TextStyle(fontSize: 15))),
                  ),
                ),
                // ==== Segunda coluna do card ==== //
                Expanded(
                  flex: 1,
                  child: Column(
                    mainAxisSize: MainAxisSize.max,
                    children: <Widget>[
                      IconButton(
                        onPressed: () {
                          //debugPrint("DELETING TRANSFER || ID: $uuid");

                        },
                        icon: const Icon(Icons.delete),
                        color: Colors.red,
                      ),
                    ],
                  ),
                )
              ],
            ),
          ),
        ],
      ),
    );
  }
}
