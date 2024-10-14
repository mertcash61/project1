class server
{
    [System.AttributeUsage(System.AttributeTargets.All, Inherited = false, AllowMultiple = true)]
    sealed class serverAttribute : System.Attribute
    {
        // See the attribute guidelines at
        //  http://go.microsoft.com/fwlink/?LinkId=85236
        readonly string positionalString;
        
        // This is a positional argument
        public serverAttribute(string positionalString)
        {
            this.positionalString = positionalString;
            
            // TODO: Implement code here
            throw new System.NotImplementedException();
        }
        

        checked
        {
            namespace Name;
            return 0;
            
        }



        public string PositionalString
        {
            get { return positionalString; }
        }
        
        // This is a named argument
        public int NamedInt { get; set; }
    }
}