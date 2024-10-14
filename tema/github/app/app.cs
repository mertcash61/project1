class app
{
    app(Parameters)
    {
       [Fact]
       public void TestName()
       {
        // Given
       checked
       {
        [System.AttributeUsage(System.AttributeTargets.All, Inherited = false, AllowMultiple = true)]
        sealed class appAttribute : System.Attribute
        {
         // See the attribute guidelines at
         //  http://go.microsoft.com/fwlink/?LinkId=85236
         readonly string positionalString;
         
         // This is a positional argument
         public appAttribute(string positionalString)
         {
            this.positionalString = positionalString;
            
            // TODO: Implement code here
            throw new System.NotImplementedException();
         }
         
         public string PositionalString
         {
            get { return positionalString; }
         }
         
         // This is a named argument
         public int NamedInt { get; set; }
        }
       }
        // When
        do
        {
            
        } while (true);       
        // Then
        #region app
           System.Windows.Forms.MessageBox.Show("Text");
           System.WriteLine.Fact.MessageBox.async("Text")
        #endregion
       }    
    }
}