# ConvertToPascalCase
Camel case class name/property convert to Pascal Case

Camel case data;
<code>
public class testData
{
   public string name { get; set; }
   public string surName { get; set; }
}

public class testData2
{
   public string name2 { get; set; }
   public string surName2 { get; set; }
}
</code>

Convert to Pascal Case;

public class TestData
{
   public string Name { get; set; }
   public string SurName { get; set; }
}

public class TestData2
{
   public string Name2 { get; set; }
   public string SurName2 { get; set; }
}
