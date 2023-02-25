# Converter online tool

# Dynamics Ax Converter
https://converter.semihcelikol.com/dynamicsAxConverter.html
Automatically generate DataContractAtrribute Class and Members.
Enter your ClassName and variable Types,Name. Press the Generate button and automatically generate your class.
<h3>Example output</h3>

```

[DataContractAttribute]
class SemResultModel
{
    boolean     success;
    str         message;
}

[DataMemberAttribute('Message')]
public str parmMessage(str _message = message)
{
    message = _message;

    return message;
}


[DataMemberAttribute('Success')]
public boolean parmSuccess(boolean _success = success)
{
    success = _success;

    return success;
}


```

# ConvertToPascalCase
Camel case class name/property convert to Pascal Case: https://converter.semihcelikol.com/modelClassConverter.html

# Example Camel case to pascal case

<h3>Camel case data;</h3>

```

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
```

<h3>Convert to Pascal Case;</h3>

```

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
```
