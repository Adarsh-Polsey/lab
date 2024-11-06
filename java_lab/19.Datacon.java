package adarsh;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

class Datacon {

    public static void main(String args[]) throws ClassNotFoundException, SQLException {
//setting driver
        Class.forName("com.mysql.cj.jdbc.Driver");
//with db
        Connection con = DriverManager.getConnection(
                "jdbc:mysql://localhost:3306/mydb", "root", "root");

        System.out.println("connection created");
//
        Statement stmt = con.createStatement();
        String insertsql = " insert into students (id, name)" + " values (3,'gg')";
        int rowaffected=stmt.executeUpdate(insertsql);

        ResultSet rs = stmt.executeQuery("select id,name from students");
        

        while (rs.next()) {
            int id = rs.getInt("id");
            String name = rs.getString("name");

            System.out.println("------------------------");

            System.out.println("ID:" + id);
            System.out.println("Name:" + name);
        }

    }
}
