// ==== ESSA CLASSE FUNCIONA COMO UMA PÁGINA ==== //
// ==== EXIBE OS ITENS DE TRANSFERÊNCIAS, QUE SÃO WIDGETS "CARD", E TAMBÉM O BOTÃO PARA EXIBIR O FORMULÁRIO ==== //

import 'package:flutter/material.dart';
import 'package:primeiro_projeto/models/transfer_item.dart';
import 'package:primeiro_projeto/screens/transfer_form.dart';
import 'package:primeiro_projeto/models/transfers_storage.dart';
// Para geração de códigos únicos // https://pub.dev/packages/uuid
import 'package:uuid/uuid.dart';

class TransferList extends StatefulWidget with TransfersStorage {
  TransferList({Key? key}) : super(key: key);

  @override
  State<StatefulWidget> createState() {
    return TransferListState();
  }
}

// ==== STATE DA CLASSE TRANSFERLIST ==== //
class TransferListState extends State<TransferList> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('All transfers'),
        backgroundColor: Colors.green,
      ),
      // ==== Widget "ListView" para listagem de itens com scroll ==== //
      body: ListView.builder(
          itemCount: widget.transfersList.length,
          itemBuilder: (context, index) {
            final actualTransferCard = widget.transfersList[index];
            return actualTransferCard;
          }),
      floatingActionButton: FloatingActionButton(
        // ==== Programação do evento de clique no botão de abrir formulário ==== //
        onPressed: () {
          // Navegação para a página do formulário
          final Future formReturn = Navigator.push(context, MaterialPageRoute(builder: (context) {
            return TransferForm();
          }));

          // Recuperação do valor retornado do método Navigator.pop() realizado no envio do formulário
          formReturn.then((newTransferData) {
            debugPrint("New transfer created | Valor: ${newTransferData[0]} | Conta: ${newTransferData[1]} |");
            setState(() {
              // Objeto para geração de um UUID // https://pub.dev/packages/uuid
              var uuid = Uuid();

              // O ID da transferência vai ter essa composição: [quantidade transferências somado 1].uuid
              var transferID = "${widget.transfersList.length}-${uuid.v1()}";

              // Widget da nova transferência
              TransferItem newTransfer = TransferItem(newTransferData[0], newTransferData[1], transferID);

              // Adição do Widget da nova transferência ao storage das transferências
              widget.transfersList.add(newTransfer);

            });
          });
        },
        child: const Icon(Icons.add),
        backgroundColor: Colors.green,
      ),
    );
  }
}