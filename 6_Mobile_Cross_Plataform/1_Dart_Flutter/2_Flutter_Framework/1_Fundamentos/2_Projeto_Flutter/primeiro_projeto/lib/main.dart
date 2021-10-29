import 'package:flutter/material.dart';
import 'package:primeiro_projeto/screens/TransferList.dart';

void main() => runApp(App());

class App extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      theme: ThemeData.dark(), // Widget de tema
      home: TransferList(), // Página inicial
    );
  }
}










