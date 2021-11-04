// ==== CLASSE PARA GERAÇÃO GENÉRICA DE INPUTS DO TIPO "TEXTFIELD" ==== //
import 'package:flutter/material.dart';

class FormInputGenerator extends StatelessWidget {
  final String _label;
  final String _placeholder;
  final IconData _inputIcon;
  final TextEditingController _inputController;

  FormInputGenerator(this._label, this._placeholder, this._inputIcon, this._inputController);

  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: const EdgeInsets.all(8.0),
      // ==== Input do número da conta ==== /
      child: TextField(
        controller: _inputController,
        style: const TextStyle(fontSize: 15),
        decoration: InputDecoration(
          icon: Icon(_inputIcon),
          hintText: _placeholder,
          labelText: _label,
        ),
      ),
    );
  }
}


