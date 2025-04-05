package javafxapplication;

import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;

public class SimpleCalculator extends Application {

    public void start(Stage stage) {
        // Creating TextFields for user input and result
        TextField textField1 = new TextField();
        TextField textField2 = new TextField();
        TextField resultField = new TextField();
        resultField.setEditable(false); // Disable editing for result field

        // Creating Buttons for operations
        Button btnAdd = new Button("+");
        Button btnSub = new Button("-");
        Button btnMul = new Button("*");
        Button btnDiv = new Button("/");

        // Action to handle calculations
        EventHandler<ActionEvent> calculate = event -> {
            try {
                double num1 = Double.parseDouble(textField1.getText());
                double num2 = Double.parseDouble(textField2.getText());
                double result = 0;
                switch (((Button) event.getSource()).getText()) {
                    case "+":
                        result = num1 + num2;
                        break;
                    case "-":
                        result = num1 - num2;
                        break;
                    case "*":
                        result = num1 * num2;
                        break;
                    case "/":
                        if (num2 != 0) {
                            result = num1 / num2;
                        } else {
                            resultField.setText("Error: Div by 0");
                            return;
                        }
                        break;
                }
                resultField.setText(String.valueOf(result));
            } catch (NumberFormatException e) {
                resultField.setText("Invalid Input");
            }
        };

        // Setting actions for buttons
        btnAdd.setOnAction(calculate);
        btnSub.setOnAction(calculate);
        btnMul.setOnAction(calculate);
        btnDiv.setOnAction(calculate);

        // Layout for user inputs and buttons
        HBox inputBox = new HBox(10, textField1, textField2);
        HBox buttonBox = new HBox(10, btnAdd, btnSub, btnMul, btnDiv);
        VBox vBox = new VBox(10, inputBox, buttonBox, resultField);

        // Setting up the scene and stage
        Scene scene = new Scene(vBox, 300, 150);
        stage.setTitle("Simple Calculator");
        stage.setScene(scene);
        stage.show();
    }

    public static void main(String[] args) {
        launch(args);
    }
}
