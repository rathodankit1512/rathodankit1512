package javafxapplication;

import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.geometry.Insets;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.scene.paint.Color;
import javafx.stage.Stage;

public class JavaFXCalculator extends Application {

    public void start(Stage stage) {
        // Creating TextFields for user input and displaying result
        TextField textField1 = new TextField();
        TextField textField2 = new TextField();
        TextField resultField = new TextField();
        resultField.setEditable(false);  // Disable editing for result field

        // Creating Labels
        Label label1 = new Label("Enter Number 1: ");
        Label label2 = new Label("Enter Number 2: ");
        Label label3 = new Label("Result: ");

        // Creating Buttons for operations
        Button btnAdd = new Button("+");
        Button btnSub = new Button("-");
        Button btnMul = new Button("*");
        Button btnDiv = new Button("/");

        // Adding action to each button
        btnAdd.setOnAction(new EventHandler<ActionEvent>() {
            @Override
            public void handle(ActionEvent event) {
                performCalculation("+", textField1, textField2, resultField);
            }
        });

        btnSub.setOnAction(new EventHandler<ActionEvent>() {
            @Override
            public void handle(ActionEvent event) {
                performCalculation("-", textField1, textField2, resultField);
            }
        });

        btnMul.setOnAction(new EventHandler<ActionEvent>() {
            @Override
            public void handle(ActionEvent event) {
                performCalculation("*", textField1, textField2, resultField);
            }
        });

        btnDiv.setOnAction(new EventHandler<ActionEvent>() {
            @Override
            public void handle(ActionEvent event) {
                performCalculation("/", textField1, textField2, resultField);
            }
        });

        // Creating layout for input fields and buttons
        HBox hBox1 = new HBox(10, label1, textField1);
        HBox hBox2 = new HBox(10, label2, textField2);
        HBox hBox3 = new HBox(10, label3, resultField);
        
        // Creating layout for buttons
        HBox hBoxButtons = new HBox(10, btnAdd, btnSub, btnMul, btnDiv);
        hBox1.setPadding(new Insets(10));
        hBox2.setPadding(new Insets(10));
        hBox3.setPadding(new Insets(10));
        hBoxButtons.setPadding(new Insets(10));

        // Creating VBox for main layout
        VBox vBox = new VBox(15, hBox1, hBox2, hBoxButtons, hBox3);
        vBox.setPadding(new Insets(20));
        
        // Setting up the Scene
        Scene scene = new Scene(vBox, 400, 250, Color.BEIGE);
        stage.setTitle("Simple Calculator");
        stage.setScene(scene);
        stage.show();
    }

    // Method to perform calculations
    private void performCalculation(String operation, TextField textField1, TextField textField2, TextField resultField) {
        try {
            // Parsing numbers from text fields
            double num1 = Double.parseDouble(textField1.getText());
            double num2 = Double.parseDouble(textField2.getText());
            double result = 0;

            // Performing the calculation based on the selected operation
            switch (operation) {
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

            // Displaying the result in the result text field
            resultField.setText(String.valueOf(result));
        } catch (NumberFormatException e) {
            resultField.setText("Invalid Input");
        }
    }

    public static void main(String args[]) {
        launch(args);
    }
}
