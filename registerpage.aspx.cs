using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using MySql.Data.MySqlClient;

/* Due to the remote lab constantly freezing and crashing, which has caused me to lose patience, sanity and work progress a LOT of times, I have resorted to the internet for "help".
 * C# code is provided from https://forums.asp.net/t/1768902.aspx?how+to+create+registeration+web+form+using+asp+net+and+mysql+ */

public partial class _Default : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
}

private void button1_Click(object sender, System.EventArgs e)
{
    string MyConString = "SERVER=localhost;" +
        "DATABASE=register;" +
        "UID=root;" +
        "PASSWORD=123456;";
    MySqlConnection connection = new MySqlConnection(MyConString);
    MySqlCommand command = connection.CreateCommand();
    MySqlDataReader Reader;
    command.CommandText = "select * from member";
    private void ExecuteInsert(string name, string username, string password, string gender, string age, string address)
    {
        SqlConnection conn = new SqlConnection(GetConnectionString());
        string sql = "INSERT INTO tblregister (Name, UserName, Password, Gender, Age, Address) VALUES "
                    + " (@Name,@UserName,@Password,@Gender,@Age,@Address)";

        try
        {
            conn.Open();
            SqlCommand cmd = new SqlCommand(sql, conn);
            SqlParamete[] param = new SqlParameter[6];
            //param[0] = new SqlParameter("@id", SqlDbType.Int, 20);
            param[0] = new SqlParameter("@Name", SqlDbType.VarChar, 50);
            param[1] = new SqlParameter("@UserName", SqlDbType.VarChar, 50);
            param[2] = new SqlParameter("@Password", SqlDbType.VarChar, 50);
            param[3] = new SqlParameter("@Gender", SqlDbType.Char, 10);
            param[4] = new SqlParameter("@Age", SqlDbType.Int, 100);
            param[5] = new SqlParameter("@Address", SqlDbType.VarChar, 50);

            param[0].Value = name;
            param[1].Value = username;
            param[2].Value = password;
            param[3].Value = gender;
            param[4].Value = age;
            param[5].Value = address;

            for (int i = 0; i < param.Length; i++)
            {
                cmd.Parameters.Add(param[i]);
            }

            cmd.CommandType = CommandType.Text;
            cmd.ExecuteNonQuery();
        }
        catch (System.Data.SqlClient.SqlException ex)
        {
            string msg = "Insert Error:";
            msg += ex.Message;
            throw new Exception(msg);
        }
        finally
        {
            conn.Close();
        }
    }

    protected void Button1_Click(object sender, EventArgs e)
    {
        if (TxtPassword.Text == TxtRePassword.Text)
        {
            //call the method to execute insert to the database
            ExecuteInsert(TxtName.Text,
                          TxtUserName.Text,
                          TxtPassword.Text,
                          DropDownList1.SelectedItem.Text,
                          TxtAge.Text, TxtAddress.Text);
            Response.Write("Record was successfully added!");
            ClearControls(Page);

            //Replace the 'enter_the_path_to_a_designated_aspx_page' with the designated aspx page
            Response.Redirect("enter_the_path_to_a_designated_aspx_page");
        }
        else
        {
            Response.Write("Password did not match");
            TxtPassword.Focus();
        }
    }
    public static void ClearControls(Control Parent)
    {

        if (Parent is TextBox)
        { (Parent as TextBox).Text = string.Empty; }
        else
        {
            foreach (Control c in Parent.Controls)
                ClearControls(c);
        }
    }