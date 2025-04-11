package javafxapplication1;

import javafx.application.Application;
import javafx.geometry.Insets;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;

public class SimpleCalculator extends Application 
{
    public static void main(String[] args) 
    {
        launch(args);
    }

    @Override
    public void start(Stage primaryStage) 
    {
        TextField t1 = new TextField();
        TextField t2 = new TextField();
        TextField t3 = new TextField();
        t3.setEditable(false);

        Label label1 = new Label("Enter number 1:");
        Label label2 = new Label("Enter number 2:");
        Label label3 = new Label("Answer:");

        Button add = new Button("+");
        Button sub = new Button("-");
        Button mul = new Button("*");
        Button div = new Button("/");

        add.setOnAction(e -> calculate(t1, t2, t3, "+"));
        sub.setOnAction(e -> calculate(t1, t2, t3, "-"));
        mul.setOnAction(e -> calculate(t1, t2, t3, "*"));
        div.setOnAction(e -> calculate(t1, t2, t3, "/"));

        VBox v = new VBox(10, label1, t1, label2, t2, label3, t3, add, sub, mul, div);
        v.setPadding(new Insets(20));
        Scene scene = new Scene(v, 300, 300);
        primaryStage.setTitle("Calculator");
        primaryStage.setScene(scene);
        primaryStage.show();
    }

    private void calculate(TextField tf1, TextField tf2, TextField tf3, String operation) 
    {
        try 
        {
            int num1 = Integer.parseInt(tf1.getText());
            int num2 = Integer.parseInt(tf2.getText());
            int result = 0;

            switch (operation) 
            {
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
                    if (num2 == 0) 
                    {
                        tf3.setText("Cannot divide by 0");
                        return;
                    }
                    result = num1 / num2;
                    break;
            }
            tf3.setText(String.valueOf(result));
        } 
        catch (NumberFormatException e) 
        {
            tf3.setText("Invalid input");
        }
    }
}
