import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;

publi class Main(){
	public static void main(String[] args){
		String url = "jdbc:mysql://localhost:3306/phy";
		String user="root";
		String password = "";

		try{
				Connection con=DriverManager.getConnection(url,user,password);
				Statement st = con.createStatement();
				String sql = "select *from phy.preg";
				ResultSet rs = st.executeQuery(sql);

				while(rs.next()){
					
				}

		}catch(Exception e){

		}
	}
};