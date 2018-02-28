using System;
using System.Collections;
using System.Configuration;
using System.Data;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Xml.Linq;
using MySql.Data.MySqlClient;

/* Due to the remote lab constantly freezing and crashing, which has caused me to lose patience, sanity and work progress a LOT of times, I have resorted to the internet for "help".
 * C# code is provided from http://www.c-sharpcorner.com/blogs/login-page-using-mysql-database1
 *
 * Must download and install the MySQL Connector/Net from the MySQL official website first, in order to connect to MySQL database*/

namespace Mysql_login_page

{

    public partial class _Default : System.Web.UI.Page

    {

        string strcon = "Server=localhost;Database=test;Uid=root;Pwd=;";

        string str;

        MySqlCommand com;

        object obj;



        protected void btn_login_Click(object sender, EventArgs e)

        {

            MySqlConnection con = new MySqlConnection(strcon);

            con.Open();

            str = "select count(*) from login where UserName=@UserName and Password =@Password";

            com = new MySqlCommand(str, con);

            com.CommandType = CommandType.Text;

            com.Parameters.AddWithValue("@UserName", TextBox_user_name.Text);

            com.Parameters.AddWithValue("@Password", TextBox_password.Text);

            obj = com.ExecuteScalar();

            if (Convert.ToInt32(obj) != 0)

            {

                //Replace the 'enter_the_path_to_a_designated_aspx_page' with the designated aspx page
                Response.Redirect("enter_the_path_to_a_designated_aspx_page");

            }

            else

            {

                lb1.Text = "invalid user name and password";

            }

            con.Close();

        }

    }

}