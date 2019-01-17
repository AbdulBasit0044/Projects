
import java.awt.Color;
import javax.swing.JFrame;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Abdul Basit
 */
public class Main {
    
    public static void main(String [] args){
    
    //CREATING JAVA FRAME
    JFrame obj=new JFrame();
    //CREATING GAMEPLAY OBJECT
    GamePlay gameplay=new GamePlay();
    //SETTING BOARD
    obj.setBounds(10,10,905,700);
    obj.setBackground(Color.BLUE);
    obj.setResizable(false);
    obj.setVisible(true);
    obj.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    //ADDING GAMEPLAY OBJECT IN THE JFRAME OBJECT
    obj.add(gameplay);
    }//MAIN ENDS
}//MAIN CLASS ENDS
