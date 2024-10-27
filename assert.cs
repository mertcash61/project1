class assert
{
    [System.AttributeUsage(System.AttributeTargets.All, Inherited = false, AllowMultiple = true)]
    sealed class assertAttribute : System.Attribute
    {
        // See the attribute guidelines at
        //  http://go.microsoft.com/fwlink/?LinkId=85236
        readonly string positionalString;
        
        // This is a positional argument
        public assertAttribute(string positionalString)
        {
            [System.AttributeUsage(System.AttributeTargets.All, Inherited = false, AllowMultiple = true)]
            sealed class assertAttribute : System.Attribute
            {
                // See the attribute guidelines at
                //  http://go.microsoft.com/fwlink/?LinkId=85236
                readonly string positionalString;
                
                // This is a positional argument
                public assertAttribute(string positionalString)
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
            this.positionalString = positionalString;
            
            // TODO: Implement code here
            throw new System.NotImplementedException();
        }
        
        public string PositionalString
        {
            get { return positionalString; }
        }g
        try
        {
            for (int i = 0; i < length; i++)
            {
                
            }
        }
        finally
        {
            namespace assert
            {
                #pragma warning disable format
                
                #pragma warning restore format
            }
        }
        
        // This is a named argument
        public int NamedInt { get; set; }
    }
}